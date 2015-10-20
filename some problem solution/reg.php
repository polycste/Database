
<html>
	<head>
			<link rel="stylesheet" type="text/css" href="Bootstrap/bootstrap.min.css"/>
			<script src="Bootstrap/bootstrap.min.js"></script>
	</head>
	<?php
		$name=$_GET["username"];
		$email=$_GET["email"];
		$country=$_GET["country"];
		$mesg=$_GET["mesg"];
		if(isset($_GET["username"]))
		{
			echo "Thank you ".$name."<br/>";
		}
		if(isset($_GET["email"]))
		{
			//echo $email."<br/>";
		}
		if(isset($_GET["country"]))
		{
			//echo $country."<br/>";
		}
		if(isset($_GET["mesg"]))
		{
			//echo $mesg."<br/>";
		}
		
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="contacts";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$db);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
	$sql = "INSERT INTO personalinfo (name, email, country,message)
	VALUES('$name','$email','$country','$mesg')";
	if($conn->query($sql)===TRUE)
	{
		echo "new record create successfully",$conn->insert_id;
	}
	else
	{
		echo "error".$sql."<br/>".$conn->error;
	}
	
	?>
	<body>
			<form action="reg.php" method="get">
			<p>
			<label>Username:</label>
			<input type="text" name="username"/>
			</p>
			<p>
			<label>Email:</label>
			<input type="text" name="email"/>
			</p>
			<label>country</label>
			<select name="country">
				<option value="bd">BD</option>
				<option value="india">India</option>
				<option value="USA">USA</option>
				<option value="japan">Japan</option>
			</select>
			</p>
			<p>
			<label>Message</label>
			<textarea name="mesg"></textarea>
			 <p>
			<input type="submit" name="submit" class="btn btn-primary"/>
			
			</form>
	</body>
</html>