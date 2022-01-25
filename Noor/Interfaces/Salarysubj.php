<?php
include_once '../ModelUsers/Nurse.php';
include_once '../Interfaces/Salarysubj.php';
include_once '../Interfaces/Observer.php';
include_once '../ModelUsers/Doctor.php';
include_once '../Interfaces/NotifyAllUsers.php';
class Salarysubj{
    public $salary;
    public $observers = array();

    function setState($sl)
    {
      $this->salary = $sl;
    }

    function attach($s)
    {

        array_push($this->observers , $s);
      
    }
    function notify($List)
    {
          $i = 0;
            foreach($List as $L)
            {
               
               $id = $L->id;  
               $this->observers[$i]->update($this->salary , $id);
               $i++;
            }  
            
        
    }
}
?>