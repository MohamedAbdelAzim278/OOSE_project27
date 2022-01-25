<?php
include_once 'input.php';
include_once 'RemoteControlInput.php';
   class moveRight implements interfControlInput
    {
       private $inp;
		 function __construct($bedID){
		  $this->inp = new Input($bedID);
		 }
        public function execute()
        {
            $this->inp->MoveRight();
        }
    }

?>