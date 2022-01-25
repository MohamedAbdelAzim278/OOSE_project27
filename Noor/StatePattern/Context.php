<?php
require_once('PatientState.php');
class Context
{
   public $pState;
    function __construct()
    {
        $pState = null;

    }
    function setState ($pState){
        $this -> pState = $pState;
    }
    function getState(){
        return $pState;
    }
}
?>