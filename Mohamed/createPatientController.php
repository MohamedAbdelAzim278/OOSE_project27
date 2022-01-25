<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST['name'];
    $DOB = $_POST['DOB'];
    $LastName= $_POST['LastName'];
    $phoneNumber=$_POST['phoneNumber'];
    include_once('AddPatientModel.php');//model
    $patient = new PatientCreation();
    $patient->addPatient($name, $DOB, $LastName,$phoneNumber);
}
?>