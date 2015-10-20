<?php
	
	class contactBD
	{
		public $conn;
		
		public function __construct()
		{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db="practice";

			// Create connection
			$this->$conn = new mysqli($servername, $username, $password,$db);

			// Check connection
			if ($this->$conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			echo "Connected successfully";
			
			
			
			$sql = "INSERT INTO information (name, email, country,message)
			VALUES('$name','$email','$country','$message')";
			if($conn->query($sql)===TRUE)
			{
				echo "new record create successfully",$conn->insert_id;
			}
			else
			{
				echo "error".$sql."<br/>".$conn->error;
			}
		}
	
	}


?>