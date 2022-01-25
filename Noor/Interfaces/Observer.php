<?php
include_once '../ModelUsers/Nurse.php';
include_once '../Interfaces/Salarysubj.php';
include_once '../Interfaces/Observer.php';
include_once '../ModelUsers/Doctor.php';
include_once '../Interfaces/NotifyAllUsers.php';
abstract class Observer{
    public $subj;
    abstract public function Update($salary , $id);
}

?>