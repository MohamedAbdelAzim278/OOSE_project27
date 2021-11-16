<?php
class UpdateClass
{
    function postpone($id, $Date)
    {
        $con = mysqli_connect("localhost", "root", "", "hospitalproject");
        if(!$con)
        {
            die('Could not connect: ' . mysqli_error());
        }
        $sql="select * from appointmentdetails where ID=$id";   //search for the required row
        $result = mysqli_query($con , $sql);
        
        if($result)
        {
            mysqli_query($con,"UPDATE appointmentdetails set StartDate = $Date");   //updates the row to the new data been sent
            echo"done";
        }

    }
}

?>