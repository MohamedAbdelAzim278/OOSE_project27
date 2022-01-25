<?php

class links
{
    function availableLinks($row)
    {
        $con = mysqli_connect("localhost", "root", "", "hospitalproject");
        if(!$con)
        {
            die('Could not connect: ' . mysqli_error());
        }
        $id = $row["UserTypeId"];
       
        $sql="select * from usertype_links where UserTypeId = '$id'";
        $result2 =  mysqli_query($con, $sql);
        //echo($sql);
        //echo("<br>"."welcome ".$sql);
        if ($result2->num_rows > 0)
        {
            while($row = $result2->fetch_assoc()) 
            {

                $id= $row["LinksID"];
                $sql="select * from links where ID = '$id'"; 
                // echo("<br>"."welcome ".$sql);
                $result =  mysqli_query($con, $sql);
                $row = $result->fetch_assoc();
                $location = $row["PhysicalAddress"];
               
                echo("<a href=".$location.">".$row["linkAddressName"]."</a>");
                echo("<br>");
               //header("Location: $location", true, 301);
            }
        }
    }
}
?>
               
                
