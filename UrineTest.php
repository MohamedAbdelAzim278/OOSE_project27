<?php
include_once 'Database.php';
include_once 'BloodTest.php';
include_once 'TestingInterface.php';
include_once 'UrineTest.php';
include_once 'TestingResultInterface.php';
include_once 'ShowResult.php';
include_once 'ShowExam.php';
include_once 'TestRes.php';
include_once 'Description.php';
class UrineTest implements Test , TestR , ShowResult , ShowExam , Desc{
	public $Color;
	public $Appearance;
	public $Mucus;
	public $PH;
  public $patientid;
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
 function ShowTest($patientid)
	{
		$con = mysqli_connect("localhost", "root", "", "mydb");
		$sql = "Select * from urinetesting where PatientId = '$patientid'";
         $result = mysqli_query($con , $sql);
			if($result->num_rows > 0)
            {
                  if($row = $result->fetch_assoc())
                  {
                     $ur = new UrineTest();
                     $ur->Color = $row["Color"];
					 $ur->Appearance = $row["Appearance"];
					 $ur->Mucus = $row["Mucus"];
					 $ur->PH = $row["pH"];
					 return $ur;
                  }
            }
			
	}
	
	function ShowEx($patientid)
	{
		$con = mysqli_connect("localhost", "root", "", "mydb");
		$sql = "Select * from testresults where PatientId = '$patientid' AND TestTypeId = '1'";
		$result = mysqli_query($con , $sql);
		$TR = new TestRes();
		if($result->num_rows > 0)
            {
                  if($row = $result->fetch_assoc())
                  {
					  $TR->TestTypeId = $row['TestTypeId'];
                    $TR->PatientId = $row['PatientId'];
					$TR->TestResultDescription = $row['TestResultDescription'];
					$TR->DangerStatus = $row['DangerStatus'];
					return $TR;
                  }
            }
	}
function GetDescription()
	{
		echo "A urinalysis is a simple test that looks at a small sample of your urine. It can help find problems that need treatment, including infections or kidney problems. It can also help find serious diseases in the early stages, like kidney disease, diabetes, or liver disease. A urinalysis is also called a “urine test.”08‏/08‏/2016
";
	}
			
	}



?>