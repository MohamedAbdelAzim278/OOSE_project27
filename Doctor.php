<?php
include_once 'Database.php';
include_once 'BloodTest.php';
include_once 'UrineTest.php';
include_once 'TestingInterface.php';
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
	
	function DoShowTestExam($patientid)
	{
		return $this->IShowExam->ShowEx($patientid);
	}
	
}


?>
