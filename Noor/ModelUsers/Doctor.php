<?php
include_once '../Database.php';
include_once '../Tests/BloodTest.php';
include_once '../Tests/UrineTest.php';
include_once '../Interfaces/TestingInterface.php';
include_once '../StatePattern/Context.php';
include_once '../StatePattern/PatientState.php';
include_once '../StatePattern/StableState.php';
include_once '../StatePattern/CriticalState.php';
class Doctor{
	public $DoctorName;
	public $DoctorSpeciality;
	public $IShow;
	public $ITest2;
	public $iAdd;
  public $IShowExam;
	
	
	function SetTestRes($X)
	{
		$this->ITest2 = $X;
	}
	function DoTestResFunction($Test , $Patient)
	{
	 

		$this->ITest2->TestExamine($Test, $Patient);
	}
	function SetShowExam($X)
	{
		$this->IShowExam = $X;
	}
	
	function DoShowTestExam($pid)
	{
		return $this->IShowExam->ShowEx($pid);
	}
	function getLatestBloodLevels($pat){
		$con = mysqli_connect("localhost", "root", "", "eav");
		
		$sql = "Select Max(orderid) from testingmethodoptionvalue where patientid = '$pat'";
		$result = mysqli_query($con , $sql);

		$TR = new TestRes();
		if($result->num_rows > 0)
            {
                  if($row = $result->fetch_assoc())
                  {
					  	$max = $row['Max(orderid)'];
							echo $max;
 
                  }
            }
		$sql2 = "Select Value from testingmethodoptionvalue where orderid = '$max' AND optionID = '2' order by Id desc limit 1";
		$result2 = mysqli_query($con , $sql2);			
			if ($result2->num_rows > 0) {
			  
                  if($row2 = $result2->fetch_assoc())
                  {
					  $bloodlevel = $row2['Value'];
 
                  }
			}
			return $bloodlevel;
			
	}
	
	
}



?>
