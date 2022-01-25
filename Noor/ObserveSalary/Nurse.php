<?php
include_once 'Nurse.php';
include_once 'Salarysubj.php';
include_once 'Observer.php';
include_once 'Doctor.php';
include_once 'NotifyAllUsers.php';
include_once 'ObserverPage.php';
include_once 'Database.php';
 class Nurse extends Observer implements NotifyAllUsers{
     public $salary;
     public $id;
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

 }
?>