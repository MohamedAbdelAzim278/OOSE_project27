<?php
include_once 'input.php';
include_once 'MoveDown.php';
include_once 'MoveLeft.php';
include_once 'MoveRight.php';
include_once 'MoveUp.php';
include_once 'RemoteControlInput.php';
    class Bed
    {
         public $inp;
        public function takeInput($inpt)
        {
            $this->inp = $inpt;
        }
        public function executeInput()
        {
            $this->inp->execute();   
        }
    }

?>