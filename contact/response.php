<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$servername	="localhost";
$username	="root";
$password	="";
$db			="contact";

$conn=new mysqli($servername,$username,$password,$db);//mysqli is class. argument are constructor

if($conn->connect_error){
	die("connection failed".$conn->connect_error);
}
//echo "connection successful";


$sql="select * from persons";
$result=$conn->query($sql);//$conn->query is object
echo "Contact person";
if($result->num_rows > 0){
	//output data of each row
	echo "<table border=\"1\">";
	echo "<tr><td>";
	while($row=$result->fetch_assoc()){
		//echo "id: ",$row["id"]. " -Name:" . $row["name"]. " -country" . $row["country"] . " -comment: ".$row["comment"]. "<br/>";
		echo $row["name"]."<br/>";
		//sql1="SELECT * FROM `persons` WHERE `name` = '$name' ";
		//$result=$conn->query($sql1);
	}
	echo "</tr></td>";
	echo "</table>";
}

?>
</body>
</html>