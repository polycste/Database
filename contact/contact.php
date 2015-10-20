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


if(isset($_POST['name'])&& ($_POST['email'])&& ($_POST['country'])&& ($_POST['comment']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$country=$_POST['country'];
	$comment=$_POST['comment'];
	//echo "$name $email $country $comment";
}
echo "Thank you ".$name." for contacting me I will get back to you soon<br/>";
//$sql="insert into personinfo(name, email, country, phoneNumber) Values('c', 'c@gmail.com', 'bhutan', '963')";
$sql="insert into persons(name, email, country, comment) Values('$name', '$email', '$country', '$comment')";
//echo $sql;
if($conn->query($sql)===TRUE){
	//echo "hello",$conn->insert_id;
}
else{
	echo "Error: " .$sql ."<br>". $conn->error;
}

$sql="select * from persons";
$result=$conn->query($sql);//$conn->query is object

//sql1="SELECT * FROM `persons` WHERE `name` = '$name' ";
	//	$result=$mysql_query($sql1);
		//echo $result;

if($result->num_rows > 0){
	//output data of each row
	while($row=$result->fetch_assoc()){
		//echo "id: ",$row["id"]. " -Name:" . $row["name"]. " -country" . $row["country"] . " -comment: ".$row["comment"]. "<br/>";
		echo $row["name"]."<br/>";
		
	}
}
?>

</body>
</html>