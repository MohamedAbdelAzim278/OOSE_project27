<?php
include_once 'Receptionist.php';
include_once 'AppointmentDetails.php';
include_once 'Appointment.php';
 class Receptionist{
	
	public $Rec_id;
	public $name;
    function __construct($id){
	if($id != -1)
     {
            $con = mysqli_connect("localhost", "root", "", "hospitalproject");
            if(!$con)
            {
                die('Could not connect: ' . mysqli_error());
            }

            $sql = "Select * from user where ID = '$id'";
            $result = mysqli_query($con , $sql);
            if($result->num_rows > 0)
            {
                  if($row = $result->fetch_assoc())
                  {
                    $this->Rec_id = $row["ID"];
					$this->name = $row["firstName"];
                  }
            }
	}
	}
	
	
	function AddAppointment($App_X , $App_X2){
	

        $id = 0;
		$con = mysqli_connect("localhost", "root", "", "hospitalproject");
		$sql = "INSERT INTO appointment(DocId,	ReceptionistID	,PatientId , isDeleted) VALUES ('$App_X->DocId' , '$App_X->receptionistID' , '$App_X->patientId' , '0')";
		// echo $sql;
		
		 if($con->query($sql) == true)
		{
			$id = $con->insert_id;
			echo("Created");
		}
else
{
	echo "error";
}	
		
		$sql = "Insert into AppointmentDetails(StartDate ,Cost , roomID , bedNumber , App_ID) Values ('$App_X2->StartDate','$App_X2->Cost' , '$App_X2->roomIDobject', '$App_X2->bedNumber', '$id')"; 
       	if($con->query($sql) == true)
		{
			// echo("Created");
		} 		
      
	
	}
}

?>