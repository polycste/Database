<?php
	
	$servername="localhost";
	$username="root";
	$password="";
	$db="contacts";
	
	//create connection
	$conn = new mysqli($servername,$username,$password,$db);
	
	//check connection
	if($conn->connect_error)
	{
		die("connection failed:" .$conn->connect_error);
	}
	echo "Connected successfully"."<br>";
	
	/*$name='chanpa';
	$email='chanpanstu@gmail.com';
	$country='Bangladesh';
	$phonenumber='0182851223';
	
	//$sql="INSERT INTO `personinf0`(`name`,`email`,`country`,`phonenumber`) values('chanpa','chanpanstu@gmail.com','Bangladesh','0182851223')";
	$sql="INSERT INTO `personinf0`(`name`,`email`,`country`,`phonenumber`) values('$name','$email','$country','$phonenumber')";
	
	if($conn->query($sql)===TRUE)
	{
		echo "New record created successfully",$conn->insert_id;
		
	}
	else
	{
		echo "error:".$sql."<br>".$conn->error;
	}*/
	
	$sql="SELECT * FROM personinf0";
	$result=$conn->query($sql);
	echo"<pre>";
	print_r($result);
	echo"</pre>";
	
	if($result->num_rows>0)
	{
		//output data if each row
		
		while($row=$result->fetch_assoc())
		{
			echo "id:".$row["id"]." - name:".$row["name"]." - email:".$row["email"]." - country:".$row["country"]."<br>";
		}
	}

?>