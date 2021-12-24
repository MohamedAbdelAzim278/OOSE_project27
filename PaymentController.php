<?php

if ($_POST) {
    if (isset($_POST['VisaControl'])) {
      $con = mysqli_connect("localhost", "root", "", "eav");
            if(!$con)
            {
                die('Could not connect: ' . mysqli_error());
            }    

$ar = array();
$id = 1;
            $sql = "Select * from paymentmethodoption where PMID = '$id'";
            $result = mysqli_query($con , $sql);
            $count = 0;
            if($result->num_rows > 0)
            {
                 while($row = $result->fetch_assoc())
                {
                   $x = $row["OpID"];
				   echo $x;
                   array_push($ar , $x);
                }
            }
			
		$i = 0;
		foreach($_POST['id'] as $key => $value)
		{
		     $v = $ar[$i];
	 
		$sql = "INSERT INTO paymentmethodoptionvalue(PMOID ,  Value) VALUES ('$v' , '$value')";
	    
		if($con->query($sql) == true)
		{
			echo("Created");
		}
            
			$i = $i + 1;
		}
    }

}
?>