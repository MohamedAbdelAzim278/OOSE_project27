<?php

function TestProc($ord_det){
 

 $strfe = "..\Controllers\TestController.php?";
 
 $orde = "order=".$ord_det->testorderid->id;
 $strfe .= $orde;
 
 $tt = "&testype=".$ord_det->testingmethodId;
 $test_method_id = $ord_det->testingmethodId;
 $strfe .= $tt;
 
 $patientid = "&patientid=".$ord_det->testorderid->PatientId;
 $strfe .= $patientid;
 
$visa_G = "<html><body><form method='post' action='$strfe'>";
 
 $con = mysqli_connect("localhost", "root", "", "eav");
            if(!$con)
            {
                die('Could not connect: ' . mysqli_error());
            }

            $sql = "Select * from testingmethodoption where TMID = '$test_method_id'";
            $result = mysqli_query($con , $sql);
 
    if($result->num_rows > 0)
    {	  
      $count = 0;
	  $str = "";
	  $url = "";
         while($row = $result->fetch_assoc())
		 {
			 $z = $row["OpID"];
              $sql2 = "Select Id,Name,Type from testingoptions where Id = '$z'";
		
            $result2 = mysqli_query($con , $sql2);
			  if($result2->num_rows > 0)
			  {   
				  if($row2 = $result2->fetch_assoc())
				  {
					  
				  $option_name = $row2["Name"];
				  $option_id = $row2["Id"];  
					  if(strtolower($row2["Type"]) == strtolower("String"))
					  {
						 
						  $visa_G .= "<input type = \"text\" id = \"$count\" placeholder =\"$option_name\"  name = \"$option_id\">";
						   $str .= $option_id ;
						   $str .= ",";
					  }
					  if(strtolower($row2["Type"]) == strtolower("Date"))
					  {
						
						  $visa_G .= "<input type = \"date\" id = \"$count\" placeholder =\"$option_name\" name = \"$option_id\" >";
						   $str .= $option_id;
						   $str .= ",";
					  }
					  if(strtolower($row2["Type"]) == strtolower("int"))
					  {
						$visa_G .= "<input type = \"number\" id = \"$count\" placeholder =\"$option_name\" name = \"$option_id\" >";
						  $str .= $option_id;
						   $str .= ",";

					  }
				  }
			
			  }
			   
            $count = $count + 1;
		 }
		 echo $str;
	}
        
 	
   $visa_G .= "
   <input type = \"submit\" name = \"TestControl\" value = \"TestControl\">
   </form></body></html>";
  
  
    echo $visa_G;
}


?>