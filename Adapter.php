<?php

include_once '../ModelUsers/Doctor.php';
include_once '../Interfaces/TestingResultInterface.php';
include_once '../Interfaces/ShowResult.php';
include_once '../Interfaces/ShowExam.php';
include_once '../Interfaces/TestRes.php';
include_once '../Interfaces/Description.php';
include_once '../Tests/Eavbig.php';
include_once '../Interfaces/TestingInterface.php';
include_once '../Interfaces/TestingResultInterface.php';
include_once '../Interfaces/ShowResult.php';
include_once '../Interfaces/ShowExam.php';
include_once '../Interfaces/TestRes.php';
include_once '../Interfaces/Description.php';
include_once '../Tests/Eavbig.php';
include_once '../Interfaces/TestExamViewer.php';
class DoctorToNurseAdapter implements ShowResult{
	
	function ShowTest($id){
	    $doctor = new Doctor();
		$doctor->SetShowExam(new UrineTest());
		$sa = $doctor->DoShowTestExam($id);
	 
		$T = new TestExamViewer();
		$T->ExamViewer($sa);
	}
	
}
?>