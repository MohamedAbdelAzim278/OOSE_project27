<?php
include_once '../Interfaces/Salarysubj.php';
include_once '../Interfaces/Observer.php';
include_once '../Interfaces/NotifyAllUsers.php';
include_once '../Database.php';
include_once '../Tests/BloodTest.php';
include_once '../Tests/UrineTest.php';
include_once '../Interfaces/TestingInterface.php';
include_once('../EAV/OrderT.php');
 class Nurse extends Observer implements NotifyAllUsers{
     public $salary;
     public $id;
	 public $IShowResult;
	  public $ITest;
     function __construct($id)
     {
         if($id != -1)
         {
            $con = mysqli_connect("localhost", "root", "", "mydb");
            if(!$con)
            {
                die('Could not connect: ' . mysqli_error());
            }

            $sql = "Select * from users where userID = '$id'";
            $result = mysqli_query($con , $sql);
            $count = 0;
            if($result->num_rows > 0)
            {
                $count++;
                  if($row = $result->fetch_assoc())
                  {
                    $this->id = $row["UserID"];
                    $this->salary = $row["Salary"];
                  }
            }
               
            
         }
         if($id == -1)
         {
            $this->subj = new Salarysubj();
         }
     }
    
     public function Update($sf , $id)
     {
        $con = mysqli_connect("localhost", "root", "", "mydb");
	 
		$sql = "Update users Set Salary = '$sf' where Userid = '$id'";
	
		if($con->query($sql) == true)
		{
			echo("Created");
		}
		else
		{
			echo("Error");
		}
	
     }
     
     public function NotifyUsers($s , $usertype)
     {
         
        $lf = array();
        $con = mysqli_connect("localhost", "root", "", "mydb");
            if(!$con)
            {
                die('Could not connect: ' . mysqli_error());
            }

            $sql = "Select * from users where usertypeID = '$usertype'";
            $result = mysqli_query($con , $sql);
 
		if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $user = new Nurse($row["UserID"]);
                $user->subj = $s;
                $user->subj->attach($this);
                array_push($lf , $user);
               
            }
            return $lf;
        }
        else
		{
			echo("Error");
		}
        
 
     }

     function SetTest($X)
	{
		$this->ITest = $X;
	}
	 function DoTestFunction($Test , $Patient)
	 {
	 

		$this->ITest->AddTesting($Test, $Patient);
	 } 
	 
	
function SetShowRes($X)
	{
		$this->IShowResult = $X;
	}
	
	function DoShowTestResult($pid)
	{
		return $this->IShowResult->ShowTest($pid);
        
	}

   function AddOrder($order_X){
	     $con = mysqli_connect("localhost", "root", "", "eav");
		$sql = "Insert into testorder(NurseId , PatientId)Values('$order_X->NurseId','$order_X->PatientId')";
	
		if($con->query($sql) == true)
		{
			echo("Created");
		}
		else
		{
			echo("Error");
		}
   }

	function AddOrderDetails($order_det_X){
	 $con = mysqli_connect("localhost", "root", "", "eav");
	 $order_id =  $order_det_X->testorderid->id;
     $sql = "Insert into testorderdetails(testorderid , testingmethodId , cost)Values('$order_id','$order_det_X->testingmethodId' , '$order_det_X->cost')";
	
		if($con->query($sql) == true)
		{
			echo("Created");
		}
		else
		{
			echo("Error");
		}
    }
 }
?>