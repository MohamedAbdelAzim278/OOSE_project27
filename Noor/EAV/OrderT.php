<?php
class TestOrder{
	public $id;
	public $NurseId;
	public $PatientId;
	public $DateTimeStamp;
	function __construct($id){
	  if($id != "")
	  {
		$con = mysqli_connect("localhost", "root", "", "eav");
		$sql = "Select * from Testorder where Id = '$id'";
         $result = mysqli_query($con , $sql);
			if($result->num_rows > 0)
            {
                   if($row = $result->fetch_assoc())
                  {
					    $this->id = $row['Id'];
						$this->NurseId = $row['NurseId'];
						$this->PatientId = $row['PatientId'];
                  }
            }
			
	  }
	}
	
}
?>