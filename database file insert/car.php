<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db="company";
	
	//create connection 
	
	$conn=new mysqli($servername,$username,$password,$db);
	
	//check connection
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
	
	
	$sql="SELECT * FROM employee_info";
	$result=$conn->query($sql);
	echo"<pre>";
	print_r($result);
	echo"</pre>";
	
	if($result->num_rows>0)
	{
		//output data if each row
		
		while($row=$result->fetch_assoc())
		{
			echo "employee_id:".$row["employee_id"]." - name:".$row["name"]." - resisgnation:".$row["resignation"]." - salary:".$row["salary"]."<br>";
		}
	}
	echo "<br>"."<br>";
	
	$sql="SELECT * FROM car_info";
	$result=$conn->query($sql);
	echo"<pre>";
	print_r($result);
	echo"</pre>";
	
	if($result->num_rows>0)
	{
		//output data if each row
		
		while($row=$result->fetch_assoc())
		{
			echo "id:".$row["id"]." - car_name:".$row["car_name"]." - company:".$row["company"]." - model:".$row["model"]."<br>";
		}
	}


	
	
	
?>