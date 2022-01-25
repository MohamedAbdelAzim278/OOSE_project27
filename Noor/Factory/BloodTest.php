<?php

include_once 'Description.php';
include_once 'Database.php';
include_once 'BloodTest.php';
include_once 'TestingInterface.php';
 class BloodTest implements Test , Desc{
	public $Hameoglobin;
	public $Neutrophilis;
	public $Lymphocytes;
	function AddTesting($X , $Patientid)
	{
	
	

		$mysqli = new mysqli("localhost","root","","mydb");

		
		if ($mysqli -> connect_errno) {
		  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
		  exit();
		}
		$con = mysqli_connect("localhost", "root", "", "mydb");
	 
		$sql = "INSERT INTO employees ( name , address ,salary) VALUES ( '$X->Haemoglobin' ,' $X->Neutrophilis' , '$X->Lymphocytes')";
	
		if($con->query($sql) == true)
		{
			echo("Created");
		}
		else
		{
			echo("Error");
		}
	
		
        }
      function GetDescription()
	{
        echo "A test done on a sample of blood to measure the amount of certain substances in the blood or to count different types of blood cells. Blood tests may be done to look for signs of disease or agents that cause disease, to check for antibodies or tumor markers, or to see how well treatments are working.
";
	}
		
	}


?>