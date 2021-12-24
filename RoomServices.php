<?php
include_once 'HeartRateMonitor.php';
include_once 'RoomServices.php';
include_once 'HeartRateMonitor.php';
include_once 'Nurse.php';
include_once 'Richroom.php';
include_once 'RoomAdd.php';
include_once 'RoomServices.php';
abstract class RoomServices{
    abstract public function getDescription();
    abstract public function cost();
}
?>