<?php
   class MiddleRoom implements RoomServices{
       public $roomID;
       public $NumberOfBeds;
       

      public function getDescription()
       {
          return "Middle";            
       }
      public function cost()
       {
          return "50";
       }
   }
?>