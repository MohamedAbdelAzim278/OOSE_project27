<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST['name'];
    $DOB = $_POST['DOB'];
    include_once('AddPatientModel.php');//model
    $patient = new PatientCreation();
    $patient->addPatient($name, $DOB);
}
?>