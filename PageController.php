<?php
include_once('VisaProcedurev2.php');
if ($_POST) {
    if (isset($_POST['VisaChoice'])) {
		
       if($_POST['PM'] == "Visa")
	   {
		   visaproc();
	   }
	  
    }

   
   
 }
 ?>