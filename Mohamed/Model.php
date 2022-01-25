<?php
include_once("DataBase.php");
class ReadClass
{
    function readOneRow($id)
    {
        
        $con = mysqli_connect("localhost", "root", "", "hospitalproject");
        if(!$con)
        {
            die('Could not connect: ' . mysqli_error());
        }
             // Attempt select query execution
             $sql2 = "SELECT *  FROM patientmedicalhistory where PatientId = $id";

             $result =  mysqli_query($con, $sql2);
             if ($result->num_rows > 0) 
             {
                if($row = $result->fetch_assoc()) 
                {
                    $id2 = $row['MedicalHistoryID'];
                    $sql = "SELECT *  FROM medicalhistory where ID = $id2";
                    
                    $result =  mysqli_query($con, $sql);
                    if ($result->num_rows > 0) 
                    {
                       if($row = $result->fetch_assoc()) 
                       {
                           return $row;
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

