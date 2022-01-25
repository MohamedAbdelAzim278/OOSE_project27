<?php
include_once '../Database.php';
 
include_once '../Interfaces/TestingInterface.php';
include_once '../Interfaces/TestingResultInterface.php';
include_once '../Interfaces/ShowResult.php';
include_once '../Interfaces/ShowExam.php';
include_once '../Interfaces/TestRes.php';
include_once '../Interfaces/Description.php';
class CovidTest implements Desc{
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
		echo "COVID-19 tests can detect either SARS-CoV-2, the virus that causes COVID-19, or antibodies that your body makes after getting COVID-19 or after getting vaccinated.

Tests for SARS-CoV-2 tell you if you have an infection at the time of the test. This type of test is called a “viral” test because it looks for viral infection. Antigen or Nucleic Acid Amplification Tests (NAATs) are viral tests.

Tests for antibodies may tell you if you have had a past infection with the virus that causes COVID-19. Your body creates antibodies after getting infected with SARS-CoV-2 or after getting vaccinated against COVID-19. These tests are called “antibody” or “serology” tests.";
	}	 
	}
	
	




?>