<html>
	
	<?php
		$name=$_GET["name"];
		$email=$_GET["email"];
		$country=$_GET["country"];
		$message=$_GET["message"];
		
		if(isset($_GET["name"]))
		{
			echo $name."<br/>";
		}
		if(isset($_GET["email"]))
		{
			echo $email."<br/>";
		}
		if(isset($_GET["country"]))
		{
			echo $country."<br/>";
		}
		if(isset($_GET["messgae"]))
		{
			echo $message."<br/>";
		}
		
		
		
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="practice";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$db);

	// Check connection
	if ($conn->connect_error) {
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
	
	$sql="SELECT*FROM information";
	$result=$conn->query($sql);
	echo "<pre/>";
	print_r($result);
	echo "<pre/>";
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			echo "id:".$row[id]."<br/>";
			echo "name:".$row[name]."<br/>";
			echo "email:".$row[email]."<br/>";
			echo "message:".$row[message]."<br/>";
		}
		
	}
	else
	{
		echo "0 results";
	}
	$conn->close();
	?>
	<body>
			<form action="contact.php" method="get" align="center">
			<p>
			<label>Username:</label>
			<input type="text" name="name"/>
			</p>
			<p>
			<label>Email:</label>
			<input type="text" name="email"/>
			</p>
			<label>country:</label>
			<select name="country">
				<option value="Bangladesh">Bangladesh</option>
				<option value="Pakistan">Pakistan</option>
				<option value="India">India</option>
				<option value="USA">USA</option>
				<option value="japan">Japan</option>
			</select>
			</p>
			<p>
			<label>Message</label>
			<textarea name="message"></textarea>
			 <p>
			<input type="submit" name="submit" class="btn btn-primary"/>
			
			</form>
	</body>
</html>