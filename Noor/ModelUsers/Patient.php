<?php
include_once '../StatePattern/Context.php';
include_once '../StatePattern/PatientState.php';
include_once '../StatePattern/StableState.php';
include_once '../StatePattern/CriticalState.php';

public class Patient{
	public $patientid;
	public $currentstate;
	
	function __construct($id){
		$this->patientid = $id;
		$this->currentstate = null;
	}
	function setState($state){
		
		$this->currentstate = $state;
	}
	function getSstate(){
		return $this->currentstate;
	}
}
?>