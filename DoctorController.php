<?php

include_once 'Database.php';
include_once 'BloodTest.php';
include_once 'Doctor.php';
include_once 'UrineTest.php';
include_once 'TestRes.php';

if ($_POST) {
    if (isset($_POST['BloodTest'])) {
     
	   
        $Bl = new BloodTest();
        $Bl_Details = new BloodTest();
        $Bl_Details->Haemoglobin = $_POST['Haemoglobin'];
        $Bl_Details->Neutrophilis = $_POST['Neutrophilis'];
        $Bl_Details->Lymphocytes = $_POST['Lymphocytes'];
        
     
        $D = new Doctor();
	    $D->SetTestRes($Bl);
        $D->DoTestResFunction($Bl_Details , 2);
    }

    if (isset($_POST['UrineTest'])) {
     
 
      
        echo "YEEES";
        $T = new TestRes();
        $TR = new TestRes();
        $TR->PatientId = $_POST['patientid'];
        $TR->TestResultDescription = $_POST['Result'];
        $TR->DangerStatus = $_POST['Patientstatus'];
        $D = new Doctor();
	    $D->SetTestRes(new UrineTest());
        $D->DoTestResFunction($TR , 2);
      
    }

	
     
 }
   
   
     




?>