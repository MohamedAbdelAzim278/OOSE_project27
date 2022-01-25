<?php
require_once('PatientState.php');
class CriticalState implements PatientState
{
	public $blood_test;
	function __construct($bl){
	$this->blood_test = $bl;
	}
    function SaveState()
    {
		
	}
}
?>