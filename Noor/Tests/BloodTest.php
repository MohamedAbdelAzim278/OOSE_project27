<?php
include_once '../Database.php';
include_once '../Interfaces/TestingInterface.php';
include_once '../Interfaces/Description.php';
include_once '../Interfaces/TestingResultInterface.php';
include_once '../Interfaces/ShowResult.php';
include_once '../Interfaces/ShowExam.php';


 class BloodTest implements  Test , TestR , ShowResult , ShowExam , Desc {
	public $Hameoglobin;
	public $Neutrophilis;
	public $Lymphocytes;

	function TestExamine($X , $Patientid)
	{
		$con = mysqli_connect("localhost", "root", "", "mydb");
		$sql = "INSERT INTO testresults (TestTypeId , TestResultDescription , DangerStatus , PatientId , orderid) VALUES (2 , '$X->TestResultDescription' , '$X->DangerStatus' , '$X->PatientId ' , '$X->orderid')";
			if($con->query($sql) == true)
			{
				echo("Created");
			} 
				else
			{
				echo("Error");
	 
			}	
	}
	function AddTesting($X , $Patientid)
	{
	
	

		$mysqli = new mysqli("localhost","root","","mydb");

		
		if ($mysqli -> connect_errno) {
		  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
		  exit();
		}
		$con = mysqli_connect("localhost", "root", "", "mydb");
	 
		$sql = "INSERT INTO bloodtesting ( Haemoglobin , Neutrophilis ,Lymphocytes) VALUES ( '$X->Haemoglobin' ,' $X->Neutrophilis' , '$X->Lymphocytes')";
	
		if($con->query($sql) == true)
		{
			echo("Created");
		}
		else
		{
			echo("Error");
		}
	
		
        }
function ShowTest($patientid)
	{
		$con = mysqli_connect("localhost", "root", "", "mydb");
		$sql = "Select * from bloodtesting where PatientId = '$patientid'";
         $result = mysqli_query($con , $sql);
		 $bl = new BloodTest();
			if($result->num_rows > 0)
            {
                  if($row = $result->fetch_assoc())
                  {
                     $bl->Hameoglobin = $row["Haemoglobin"];
					 $bl->Neutrophilis = $row["Neutrophilis"];
					 $bl->Lymphocytes = $row["Lymphocytes"];
					 return $bl;
                  }
            }
			return null;
			
	}
	function ShowEx($patientid)
	{
		$con = mysqli_connect("localhost", "root", "", "mydb");
		$sql = "Select * from testresults where PatientId = '$patientid' AND TestTypeId = '2'";
		$result = mysqli_query($con , $sql);
		$TR = new TestRes();
		if($result->num_rows > 0)
            {
                  if($row = $result->fetch_assoc())
                  {
                    $TR->PatientId = $row['patientid'];
					$TR->TestResultDescription = $row['Result'];
					$TR->DangerStatus = $row['Patientstatus'];
					return $TR;
                  }
            }
	}
	  function GetDescription()
	{
        echo "A test done on a sample of blood to measure the amount of certain substances in the blood or to count different types of blood cells. Blood tests may be done to look for signs of disease or agents that cause disease, to check for antibodies or tumor markers, or to see how well treatments are working.
";
	}
	}


?>