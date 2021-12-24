<?php
include_once 'Description.php';
include_once 'Database.php';
include_once 'BloodTest.php';
include_once 'UrineTest.php';
include_once 'CovidTest.php';
class Factory{

	 function getTest($x) {
     if($x == 1)
	 {
		 return new BloodTest();
	 }
	 if($x == 2)
	 {
		 return new UrineTest();
	 }
	 if($x == 3)
	 {
		 return new CovidTest();
	 }
  }
}
?>