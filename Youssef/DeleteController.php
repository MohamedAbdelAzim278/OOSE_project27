<?php
if(isset($_POST['id']) && !empty($_POST['id']))
{
    $id = $_POST['id'];
    include_once('DeleteModel.php');///model
    $delete = new DeleteClass();
    $delete->DeleteRow($id);
}
else 
{
    if (empty(trim($_GET["id"]))) {
        header("location: error.php");
        exit();
    }
}
?>