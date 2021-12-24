<?php
$visa_G = "<html><body><form method='post' action='PaymentController.php'>";
 $con = mysqli_connect("localhost", "root", "", "eav");
            if(!$con)
            {
                die('Could not connect: ' . mysqli_error());
            }

            $sql = "Select * from options";
            $result = mysqli_query($con , $sql);
 
    if($result->num_rows > 0)
    {
         while($row = $result->fetch_assoc())
		 {
              
			  
   if(strtolower($row["Type"]) == strtolower("String"))
	{

				$visa_G .= "<input type = \"text\" id = \"$id\"  name = \"$id\">";
	}
   if(strtolower($row["Type"]) == strtolower("Date"))
	{
	   $visa_G .= "<input type = \"date\" id = \"$id\" name = \"$id\" >";
	}
		 }
	}
         
   $visa_G .= "
   <input type = \"submit\" name = \"VisaControl\" value = \"VisaControl\">
   </form></body></html>";
  
    echo $visa_G;
	


?>