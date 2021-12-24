<?php
include_once 'Database.php';
include_once 'BloodTest.php';
include_once 'TestingInterface.php';
include_once 'UrineTest.php';
include_once 'TestingResultInterface.php';
include_once 'CovidTest.php';
include_once 'FacadeClass.php';
include_once 'TestExamViewer.php';
include_once 'Nurse.php';
include_once 'Doctor.php';
include_once 'UrineTestViewer.php';
class FacadeClass{
	public $nurse;
	public $doctor;
	function __construct(){
	  $this->nurse = new Nurse(1);
	  $this->doctor = new Doctor();
	}
	function ViewTests($patientId){
		
		$this->nurse->SetShowRes(new UrineTest());
		$sb = $this->nurse->DoShowTestResult($patientId);
		$TU = new UrineTestViewer();
		$TU->UrineTestView($sb);
		
		$this->doctor->SetShowExam(new UrineTest());
		$sa = $this->doctor->DoShowTestExam($patientId);
		$T = new TestExamViewer();
		$T->ExamViewer($sa);
		
		/*
		$this->doctor->SetShowExam(new BloodTest());
		$sa = $this->doctor->DoShowTestExam($patientid);
		$T = new TestExamViewer();
		$T->ExamViewer($sa);
		*/
		 
	}
}
?>