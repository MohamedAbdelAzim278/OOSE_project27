<?php
if(isset($_POST['id']) && !empty($_POST['id']))
{
    $id = $_POST['id'];
    $Date = $_POST['Date'];
    include_once('UpdateRowModel.php');///model
    $update = new UpdateClass();
    $update->postpone($id, $Date);
}
else 
{
    if (empty(trim($_GET["id"]))) {
        header("location: error.php");
        exit();
    }
}
?>