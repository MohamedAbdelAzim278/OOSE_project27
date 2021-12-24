<?php
include_once 'Nurse.php';
include_once 'Salarysubj.php';
include_once 'Observer.php';
include_once 'Doctor.php';
include_once 'NotifyAllUsers.php';
abstract class Observer{
    public $subj;
    abstract public function Update($salary , $id);
}

?>