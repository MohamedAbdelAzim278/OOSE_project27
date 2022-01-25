<?php
include_once 'Nurse.php';
include_once 'Salarysubj.php';
include_once 'Observer.php';
include_once 'Doctor.php';
include_once 'NotifyAllUsers.php';
if ($_POST) {
    if (isset($_POST['Salupdate'])) {
     

        $NS = new Nurse(-1);
        $s = new Salarysubj();
        $s->setState($_POST['salary']);
	    $List = $NS->NotifyUsers($s , 4);
        $s->notify($List);
    }


	
     
 }
   
   
     




?>