<?php
include_once '../Database.php';
include_once '../Tests/BloodTest.php';
include_once '../Interfaces/TestingInterface.php';
include_once '../Tests/UrineTest.php';
include_once '../Interfaces/TestingResultInterface.php';
include_once '../Tests/CovidTest.php';
include_once '../Interfaces/TestExamViewer.php';
include_once '../ModelUsers/Nurse.php';
include_once '../ModelUsers/Doctor.php';
include_once '../Tests/UrineTestViewer.php';
class FacadeClass{
	public $nurse;
	public $doctor;
	function __construct(){
	  $this->nurse = new Nurse(1);
	  $this->doctor = new Doctor();
	}
	function ViewTests($patientid){
		
		
		$this->nurse->SetShowRes(new UrineTest());
		$sb = $this->nurse->DoShowTestResult($patientid);
		$TU = new UrineTestViewer();
		$TU->UrineTestView($sb);
		
		
		
		$this->doctor->SetShowExam(new UrineTest());
		$sa = $this->doctor->DoShowTestExam($patientid);
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