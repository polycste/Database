<?php
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
	$sql="SELECT*FROM personalinfo";
	$result=$conn->query($sql);
	echo "<pre/>";
	print_r($result);
	echo "<pre/>";
?>
<html>
<head></head>
<body>
<div>
    <table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Country</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
	<?php if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{?>
			<tr>
			<td><?php echo $row['name']?></td>
			<td><?php echo $row['email']?></td>
			<td><?php echo $row['country']?></td>
			<td><?php echo $row['message']?></td>
			</tr>
	<?php	}
		
	}
	else
	{
		echo "0 results";
	}
	$conn->close();
		
	?>
	</tbody>
	</table>