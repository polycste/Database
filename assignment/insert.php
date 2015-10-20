<?php
		$sql = "INSERT INTO information(name,email,country,message) VALUES
		       ('$name','$email','$country','$message')";
        
        if($conn->query($sql)===TRUE)
		{
			echo "New record create sucessfully" . $conn->insert_id;
		}
		else
		{
           echo "Error: " .$sql . "<br>" . $conn->error;
		}

?>