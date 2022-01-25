<?php

include_once '../Command/input.php';
include_once '../Command/MoveDown.php';
include_once '../Command/MoveLeft.php';
include_once '../Command/MoveRight.php';
include_once '../Command/MoveUp.php';
include_once '../Command/RemoteControlInput.php';
include_once '../Command/Bed.php';
include_once '../EAV/OrderT.php';
include_once 'Medicine.php';
include_once 'ProxyMedicine.php';
if ($_POST) {

    if(isset($_POST['Move']))
	{
		$mov_adjuster = null;
		if($_POST['MoveOption'] == 'LEFT')
		{
			$mov_adjuster = new moveLeft($_POST['BedID']);
			$b = new Bed();
			$b->takeInput($mov_adjuster);
			$b->executeInput();
		}
		if($_POST['MoveOption'] == 'RIGHT')
		{
			$mov_adjuster = new moveRight($_POST['BedID']);
			$b = new Bed();
			$b->takeInput($mov_adjuster);
			$b->executeInput();	
		}
		if($_POST['MoveOption'] == 'UP')
		{
			$mov_adjuster = new moveUp($_POST['BedID']);
			$b = new Bed();
			$b->takeInput($mov_adjuster);
			$b->executeInput();	
		}
		if($_POST['MoveOption'] == 'DOWN')
		{
			$mov_adjuster = new moveDown($_POST['BedID']);
			$b = new Bed();
			$b->takeInput($mov_adjuster);
			$b->executeInput();	
		}
	}


    if(isset($_POST['mSubmit']))
    {

        $m = new Medicine();
        $m->medicineName = $_POST['mName'];
        $m->medicineID = $_POST['mID'];
        $m->medicineExpirationYear = $_POST['mYear'];

        $p = new Proxy();
        $p->InsertMedicine($m);

    }
}

?>