<?php
function visaproc(){
$visa_G = "<html><body><form method='post' action='PaymentController.php'>";
 $con = mysqli_connect("localhost", "root", "", "eav");
            if(!$con)
            {
                die('Could not connect: ' . mysqli_error());
            }

            $sql = "Select * from paymentmethodoption where PMID = 1";
            $result = mysqli_query($con , $sql);
 
    if($result->num_rows > 0)
    {	  
      $count = 0;
         while($row = $result->fetch_assoc())
		 {
			 $z = $row["OpID"];
              $sql2 = "Select Name,Type from options where Id = '$z'";
		
            $result2 = mysqli_query($con , $sql2);
			  if($result2->num_rows > 0)
			  {
				  
				  if($row2 = $result2->fetch_assoc())
				  {
					  
					  if(strtolower($row2["Type"]) == strtolower("String"))
					  {
						 
						  $visa_G .= "<input type = \"text\" id = \"$count\"  name = \"id[]\">";
					  }
					  if(strtolower($row2["Type"]) == strtolower("Date"))
					  {
						
						  $visa_G .= "<input type = \"date\" id = \"$count\" name = \"id[]\" >";
					  }
					  if(strtolower($row2["Type"]) == strtolower("int"))
					  {
						$visa_G .= "<input type = \"number\" id = \"$count\" name = \"id[]\" >";

					  }
				  }
			
			  }
            $count = $count + 1;
		 }
	}
         
   $visa_G .= "
   <input type = \"submit\" name = \"VisaControl\" value = \"VisaControl\">
   </form></body></html>";
  
    echo $visa_G;
}


?>