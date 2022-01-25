<?php
require_once '../Tests/BloodTest.php';
include_once '../ModelUsers/Doctor.php';
include_once '../Tests/UrineTest.php';
class facTest{
	function getTestObject($num){
		if($num == 1){
		return new BloodTest();
		}
		if($num == 2){
		return new UrineTest();
		}
	}
}
?>