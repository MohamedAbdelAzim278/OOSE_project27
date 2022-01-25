<?php
class report
{
    function createReport()
    {
        $con = mysqli_connect("localhost", "root", "", "hospitalproject");
        if(!$con)
        {
            die('Could not connect: ' . mysqli_error());
        }
        // $sql=$mysqli->query("select * from appointment order by ID");
        $sql="select * from appointment order by ID";
        $result =  mysqli_query($con, $sql);
        echo "<table border=1 cellspacing=0 cellpading=0>";
        $tot=mysqli_num_rows($result); 
        while($row = $result->fetch_assoc())
        {
           
           
            $docID= $row['DocId'];
            
            $sql="select * from appointment where DocID = $docID";
            $sql2 = "select * from user where ID = $docID";
            $result2 =  mysqli_query($con, $sql2);
            $row2 = $result2->fetch_assoc();
            $name= $row2['firstName'];
            $result2 =  mysqli_query($con, $sql);
            $row2 = $result2->fetch_assoc();
            $rowcount=mysqli_num_rows($result2);
            $rowcount2=$rowcount/$tot *100;
            echo("<tr><td>". $name ." has " .$rowcount." Appointments  (".$rowcount2 ."%) <br>");
            
        }

    }
}




?>