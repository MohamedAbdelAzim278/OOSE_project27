<?php
if(isset($_GET['patient']) && !empty(trim($_GET['patient'])))
{
    $name = $_GET['patient'];
    include_once('ReadModel.php');//model
    $reader = new ReadClass();
    
    if($row = $reader->readOneRow($name))
    {
        $StartDate = $row['StartDate'];
        $Cost = $row['Cost'];
        $roomID = $row['roomID'];
        $bedNumber = $row['bedNumber'];
        echo("Start Date: ".$StartDate ."<br>". "Cost: " .$Cost."<br>". "Bed Number: "  .$bedNumber);
    }
    else
    {
        echo "Something went wrong. Please try again later.";
    }
}   
else 
{
    header("location: error.php");
    exit();
}