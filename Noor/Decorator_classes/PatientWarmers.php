<?php
   class PatientWarmers extends RoomDecorator{
       public $RS;
  
       function __construct($n) {
          $this->RS = $n;
      }
      public function getDescription()
       {
            return "PatientWarmersService ," . $this->RS->getDescription();
       }
      public function cost()
       {
            return 5 + $this->RS->cost();
       }
   }
?>