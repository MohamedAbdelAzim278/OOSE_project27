<?php
include_once 'Description.php';
include_once 'Database.php';
include_once 'BloodTest.php';
include_once 'TestingInterface.php';
include_once 'UrineTest.php';
include_once 'TestingResultInterface.php';
class UrineTest implements Test , TestR , Desc{
	public $Color;
	public $Appearance;
	public $Mucus;
	public $PH;

	function TestExamine($X , $Patientid)
{
	$con = mysqli_connect("localhost", "root", "", "mydb");
		$sql = "INSERT INTO testresults (TestTypeId , TestResultDescription , DangerStatus , PatientId) VALUES (1 , '$X->TestResultDescription' , '$X->DangerStatus' , '$X->PatientId ')";
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

		$con = mysqli_connect("localhost", "root", "", "mydb");
		$sql = "INSERT INTO urinetesting (Color , Appearance , Mucus , pH) VALUES ('$X->Color' , '$X->Appearance' , '$X->Mucus' , '$X->PH')";
       	if($con->query($sql) == true)
		{
			echo("Created");
		} 		

		
		else
		{
			echo("Error");
			echo("gfwrd");
		}
	 
        }
function GetDescription()
	{
		echo "A urinalysis is a simple test that looks at a small sample of your urine. It can help find problems that need treatment, including infections or kidney problems. It can also help find serious diseases in the early stages, like kidney disease, diabetes, or liver disease. A urinalysis is also called a “urine test.”08‏/08‏/2016
";
	}
		
	}
	


?>