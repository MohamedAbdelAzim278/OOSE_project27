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
    if (isset($_POST['BloodTest'])) {
     
	   
        $Bl = new BloodTest();
        $Bl_Details = new BloodTest();
        $Bl_Details->Haemoglobin = $_POST['Haemoglobin'];
        $Bl_Details->Neutrophilis = $_POST['Neutrophilis'];
        $Bl_Details->Lymphocytes = $_POST['Lymphocytes'];
        
 
        $D = new Nurse(1);
	    $D->SetTest($Bl);
        $D->DoTestFunction($Bl_Details , 2);
    }

    if (isset($_POST['UrineTest'])) {
     
 
        $Ur = new UrineTest();
        $Ur_Details = new UrineTest();
        $Ur_Details->Color = $_POST['color'];
        $Ur_Details->Appearance = $_POST['Appearance'];
        $Ur_Details->Mucus = $_POST['Mucus'];
        $Ur_Details->PH = $_POST['Ph'];
        

 
        $D = new Nurse(1);
	    $D->SetTest($Ur);
        $D->DoTestFunction($Ur_Details , 2);
      
    }


	
     
 }
   
   
     




?>