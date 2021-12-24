<?php
include_once 'RoomServices.php';
   class RichRoom extends RoomServices{
       public $roomID;
       public $NumberOfBeds;
       public function Checkbed($Bed)
       {
           
       }
      public function getDescription()
       {
          return "Rich";            
       }
      public function cost()
       {
          return "100";
       }
   }
?>