<?php
function visaproc()
{
$con = mysqli_connect("localhost", "root", "", "eav");
            if(!$con)
            {
                die('Could not connect: ' . mysqli_error());
            }

$z = 1;
	 $sql2 = "Select Html from renderhtml where PaymentMethodID = '$z'";
		
            $result2 = mysqli_query($con , $sql2);
			  if($result2->num_rows > 0)
			  {
				  
				  if($row2 = $result2->fetch_assoc())
				  {
	                 echo $row2["Html"];
			      }
			  }
}
?>