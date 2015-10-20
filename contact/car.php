<?php
$servername	="localhost";
$username	="root";
$password	="";
$db			="contact";

$conn=new mysqli($servername,$username,$password,$db);//mysqli is class. argument are constructor

if($conn->connect_error){
	die("connection failed".$conn->connect_error);
}
echo "connection successful";

$sql="select * from cardetails";
echo $sql;
$result=$conn->query($sql);//$conn->query is object
if($result->num_rows > 0){
	echo "<table border=\"1\">";
	echo "<tr><td>";
	while($row=$result->fetch_assoc()){
		echo "id: ",$row["employee_id"]. " -Name:" . $row["car_id"];
		echo "<br/>";
		//sql1="SELECT * FROM `persons` WHERE `name` = '$name' ";
		//$result=$conn->query($sql1);
	}
	echo "</tr></td>";
	echo "</table>";
}
/*SELECT employeedetails.employee_id, cardetails.car_id FROM cardetails INNER JOIN employeedetails ON employeedetails.employee_id=cardetails.car_
SELECT employeedetails.employee_name,employeedetails.salary, cardetails.car_id FROM cardetails INNER JOIN employeedetails ON employeedetails.employee_id=cardetails.employee_id */
?>

