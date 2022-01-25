<?php
include_once '../Database.php';
 
include_once '../Interfaces/TestingInterface.php';
include_once '../Interfaces/TestingResultInterface.php';
include_once '../Interfaces/ShowResult.php';
include_once '../Interfaces/ShowExam.php';
include_once '../Interfaces/TestRes.php';
include_once '../Interfaces/Description.php';
include_once '../Tests/Eavbig.php';
class UrineTest implements Test , TestR , ShowResult , ShowExam , Desc{
	public $Color;
	public $Appearance;
	public $Mucus;
	public $PH;
  public $patientid;
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
		$con = mysqli_connect("localhost", "root", "", "eav");
 
		$sql = "Select * from testingmethodoptionvalue where testingmethodId = '2' AND patientid = '$patientid'";
         $result = mysqli_query($con , $sql);
			
			$TestObject = new TMOV();
			$test_arr = array();
			if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
			$TestObject = new TMOV();
            $TestObject->Value = $row['Value'];
            $TestObject->orderid = $row['orderid'];
			$TestObject->OptionID = $row['OptionID'];
		    $TestObject->testingmethodId = $row['testingmethodId'];
		    $TestObject->patientid = $row['patientid'];
            array_push($test_arr, $TestObject);
			}
            return $test_arr;
   }
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