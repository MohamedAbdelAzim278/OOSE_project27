<?php
include_once 'Receptionist.php';
include_once 'AppointmentDetails.php';
include_once 'Appointment.php';
if ($_POST) {
    if (isset($_POST['AppointmentP'])) {
		
		
		
		$App_X = new Appointment();
	    $App_X->DocId = $_POST['DocID'];
	    $App_X->patientId = $_POST['PatientId'];
		$App_X->receptionistID = $_POST['ReceptionistID'];
		
		$App_X2 = new AppointmentDetails();
		$App_X2->StartDate = $_POST['StartDate'];
		$App_X2->Cost = $_POST['Cost'];
		$App_X2->roomIDobject = $_POST['roomID'];
		$App_X2->bedNumber = $_POST['bedNumber'];
		
        $receptionst_r = new Receptionist($_POST['ReceptionistID']);
		$receptionst_r->AddAppointment($App_X , $App_X2);
	}
    }
?>