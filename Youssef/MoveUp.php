<?php
include_once 'input.php';
include_once 'RemoteControlInput.php';

    class moveUp implements interfControlInput
    {
        private $inp = null;
		 function __construct($bedID){
		  $this->inp = new Input($bedID);
		 }
        public function execute()
        {
            $this->inp->MoveUp();
        }
    }
?>