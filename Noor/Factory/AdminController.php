<?php
include_once 'admin.php';
include_once 'Factory.php';
if ($_POST) {
    if (isset($_POST['des']))
	{
		$admin = new Admin();
		$admin->GetTestD($_POST['taskOption']);

	}
}
?>