<?php
include_once 'Database.php';
include_once 'BloodTest.php';
include_once 'TestingInterface.php';
include_once 'UrineTest.php';
include_once 'TestingResultInterface.php';
include_once 'CovidTest.php';
include_once 'Admin.php';
include_once 'Factory.php';
if ($_POST) {
    if (isset($_POST['subfacade']))
	{
		$admin = new Admin();
		$admin->facade_f($_POST["fs"]);
	}
	if (isset($_POST['des']))
	{
		$admin = new Admin();
		$admin->GetTestD($_POST['taskOption']);

	}
}
?>