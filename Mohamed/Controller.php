<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
   

    include_once('model.php');//model
    $user = new report();
    $user->createReport();
}
?>