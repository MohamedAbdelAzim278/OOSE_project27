<?php
include_once("DataBase.php");
class ReadClass
{
    function readOneRow($name)
    {

        $con = mysqli_connect("localhost", "root", "", "hospitalproject");
        if(!$con)
        {
            die('Could not connect: ' . mysqli_error());
        }
             // Attempt select query execution
             //$sql = "SELECT * FROM appointment where PatientId = $id";
             $sql = "SELECT * FROM patient where Name = '$name'";
           
            //  echo($sql. "<br>");
             $result =  mysqli_query($con, $sql);
             if ($result->num_rows > 0)
             {
                 
                if($row = $result->fetch_assoc())
                {
                    $id=$row['ID'];
                    $sql = "SELECT * FROM appointment where PatientId = $id";
                    $result =  mysqli_query($con, $sql);
                    if ($result->num_rows > 0)
                    {
                       if($row = $result->fetch_assoc())
                       {
                            
                            $id=$row['ID'];
                            $sql = "SELECT * FROM appointmentdetails where app_ID  = $id"; 
                            //echo($sql);
                            $result =  mysqli_query($con, $sql);
                    if ($result->num_rows > 0)
                    {
                       if($row = $result->fetch_assoc())
                       {
                        
                    return $row;
                       }
                    }
                }
            }
            
                   /* $ID=$id;
                    $Date = $row["StartDate"];
                    $Cost = $row["Cost"];
                    $roomID= $row["roomID"];
                    $bedNumber= $row["bedNumber"];
                */
                }
            }
    echo("");
            }
}

