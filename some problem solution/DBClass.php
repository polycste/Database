<?php

 class contacts{
	 
	 public $conn;
	 
	 public function __construct(){
		  
		  $servername = "localhost";
	      $username = "root";
	      $password = "";
	      $db = "contacts";

		//create connection
		$this->conn = new mysqli($servername,$username,$password,$db);

			//check connection
			if($this->conn->connect_error)
			{
				die("Connection failed: " . $this->conn->connect_error);
			}
			echo "Connected Successfully","<br>";
	 }	
	 
	 public function insertInto($name,$country,$email,$phoneNumber){
		 
		 
		 
        $sql = "INSERT INTO personinfo(name,country,email,phoneNumber) VALUES
		       ('$name','$country','$email','$phoneNumber')";
        
        if($this->conn->query($sql)===TRUE)
		{
			return "New record create sucessfully"."<br>";
			
            return $this->conn->insert_id;			
		}
		else
		{
           return "Error: " .$sql . "<br>"; 
		   
		   return $this->conn->error;
		}
	 }
	 
	 public function selectFrom(){
		 
	   $sql = "SELECT * FROM personinfo";
       $result = $this->conn->query($sql);
	   echo "<pre>"; 
	   print_r($result);
	   echo "</pre>";

			if($result->num_rows>0)
			{
				//output data of each row
				while($row = $result->fetch_assoc())
				{
					echo "id: " . $row["id"]."<br>";
                    echo "Name: " . $row["name"]."<br>"; 
					echo "Email: " . $row["email"]."<br>"; 
					echo "Country: " . $row["country"]."<br>";
					echo "PhoneNumber: " . $row["phoneNumber"]."<br>";
					echo "<br>";
				}
			}
			else
			{
				echo "Error";
			}	
	 }
 }

?>