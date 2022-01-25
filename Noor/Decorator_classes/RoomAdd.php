


<?php

include_once 'HeartRateMonitor.php';
include_once 'RoomServices.php';
include_once 'Nurse.php';
include_once 'Richroom.php';
include_once 'RoomAdd.php';
include_once 'RoomServices.php';
include_once 'PatientWarmers.php';
    $arr = explode("," , $_GET['services']);
    print_r(($_GET['services']));
    $richroom = new RichRoom();
    foreach ($arr as $value) {
        if($value == 0)
        {
           $richroom = new Richroom();
        }
        if($value == 2)
        {
            $richroom = new HeartRateMonitor($richroom);
        }
        if($value == 3)
        {
            $richroom = new PatientWarmers($richroom);
        }
      }
      
      echo $richroom->getDescription();
      
?>
 