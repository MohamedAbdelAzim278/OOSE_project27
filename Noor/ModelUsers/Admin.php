<?php
include_once '../Database.php';
include_once '../Tests/BloodTest.php';
include_once '../Interfaces/TestingInterface.php';
include_once '../Tests/UrineTest.php';
include_once '../Interfaces/TestingResultInterface.php';
include_once '../Tests/CovidTest.php';
include_once '../Facade/FacadeClass.php';
class Admin{
	function facade_f($ordid){
	  $s = new FacadeClass();
	  $s->ViewTests($ordid);
	}
	function GetTestD($choice)
	{
		$f = new Factory();
		$testtype = $f->getTest($choice);
		$testtype->GetDescription();
	}
}
?>