<?php
include_once 'Nurse.php';
include_once 'Salarysubj.php';
include_once 'Observer.php';
include_once 'Doctor.php';
include_once 'NotifyAllUsers.php';
include_once 'ObserverPage.php';
class Doctor extends Observer {
    public $salary;
    public $subj;
    function Update($salary , $id)
    {
        $mysqli = new mysqli("localhost","root","","mydb");

		
		if ($mysqli -> connect_errno) {
		  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
		  exit();
		}
		$con = mysqli_connect("localhost", "root", "", "mydb");
	 
		
	
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