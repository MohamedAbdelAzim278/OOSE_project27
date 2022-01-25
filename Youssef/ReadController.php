<?php
if(isset($_GET['id']) && !empty(trim($_GET['id'])))
{
    $id = $_GET['id'];
    include_once('ReadModel.php');//model
    $reader = new ReadClass();
    
    if($row = $reader->readOneRow($id))
    {
        $StartDate = $row['StartDate'];
        $Cost = $row['Cost'];
        $roomID = $row['roomID'];
        $bedNumber = $row['bedNumber'];
        echo($StartDate ."<br>" .$Cost ."<br>" .$bedNumber);
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