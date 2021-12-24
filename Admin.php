<?php
include_once 'Database.php';
include_once 'BloodTest.php';
include_once 'TestingInterface.php';
include_once 'UrineTest.php';
include_once 'TestingResultInterface.php';
include_once 'CovidTest.php';
include_once 'FacadeClass.php';
include_once 'Factory.php';
include_once 'Description.php';
class Admin{
	function facade_f($patientid){
	  $s = new FacadeClass();
	  $s->ViewTests($patientid);
	}
	function GetTestD($choice)
	{
		$f = new Factory();
		$testtype = $f->getTest($choice);
		$testtype->GetDescription();
	}
}
?>