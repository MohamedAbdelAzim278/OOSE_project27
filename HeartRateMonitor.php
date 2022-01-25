
<?php
include_once 'RoomDecorator.php';
   class HeartRateMonitor extends RoomDecorator{
       public $RS;

       function __construct($n) {
            $this->RS = $n;
        }
      public function getDescription()
       {
            return "HeartRateService , " . $this->RS->getDescription();
       }
      public function cost()
       {
            return 20 + $this->RS->cost();
       }
   }
?>