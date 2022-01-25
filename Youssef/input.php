<?php
    class Input
    {
		public $bedID;
		function __construct($bid){
			$this->bedID = $bid;
		}
        public function MoveUp()
        {
		 
             $con = mysqli_connect("localhost", "root", "", "databaseproject"); 
		     $sql = "Update beds Set position = 'UP' where id = '$this->bedID'";
			 	if($con->query($sql) == true)
		{
			echo("Created");
		}
		else
		{
			echo("Error");
		}
        }
        public function MoveRight()
        {
			$con = mysqli_connect("localhost", "root", "", "databaseproject"); 
	        $sql = "Update beds Set position = 'RIGHT' where id = '$this->bedID'";
				 	if($con->query($sql) == true)
		{
			echo("Created");
		}
		else
		{
			echo("Error");
		}
        }
        public function MoveLeft()
        {
			$con = mysqli_connect("localhost", "root", "", "databaseproject"); 
	        $sql = "Update beds Set position = 'LEFT' where id = '$this->bedID'";
				 	if($con->query($sql) == true)
		{
			echo("Created");
		}
		else
		{
			echo("Error");
		}
        }
        public function MoveDown()
        {
			$con = mysqli_connect("localhost", "root", "", "databaseproject"); 
	        $sql = "Update beds Set position = 'DOWN' where id = '$this->bedID'";
				 	if($con->query($sql) == true)
		{
			echo("Created");
		}
		else
		{
			echo("Error");
		}
        }
    }
?>