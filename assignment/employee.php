<html>
<body>
<?php

	include "connect.php";

	if(isset($_POST['name']))
	{   
        $name = $_POST['name'];
		
	}
	
	if(isset($_POST['resignation']))
	{ 
        $resignation = $_POST['resignation'];
		
	}
	
	if(isset($_POST['salary']))
	{
		 $salary = $_POST['salary'];
		
	}
	
	if(isset($_POST['car_name']))
	{
		 $car_name = $_POST['car_name'];
		
	}
		 
        /*$sql = "INSERT INTO employee_info(name,resignation,salary,car_name) VALUES
		       ('$name','$resignation','$salary','$car_name')";
        
        if($conn->query($sql)===TRUE)
		{
			echo "New record create sucessfully" . $conn->insert_id;
		}
		else
		{
           echo "Error: " .$sql . "<br>" . $conn->error;
		}
		*/
	   $sql = "SELECT * FROM employee_info";
       $result = $conn->query($sql);
	   echo "<pre>";
	   print_r($result);
	   echo "</pre>";
	   
	?>
	
	<h1> Employee Information </h1>
    <table border="1">
    <thead>
    <tr>
        <th>Employee_id</th>
        <th>Name</th>
        <th>Resignation</th>
        <th>Salary</th>
		<th>Car Name</th>
    </tr>
    </thead>	
	 <?php
         if($result->num_rows>0) {
             while ($row = $result->fetch_assoc()) {
                 echo "<tr><td>{$row['employee_id']}</td><td>{$row['name']}</td><td>{$row['resignation']}</td><td>{$row['salary']}</td>
				 <td>{$row['car_name']}</td></tr>\n";
             }
         }

        ?>
		
		
    </table>
  </body>
    </html>
	<br><br>
	<form action="employee.php" method="post">
	<h1>Please fill The form</h1>
    Name: <input type="text" name="name"><br><br>
    Resignation: <input type="text" name="resignation"><br><br>
	Salary : <input type="number" name="salary"><br><br>
	Car Name: <select name="car_name">
				  <option value="toyota">toyota</option>
				  <option value="pajaro">pajaro</option>
				  <option value="jigjag">jigjag</option>
				  <option value="beluchi">beluchi</option>
			 </select>
    <br><br>
	Click Here: <input type="submit" value="Submit"/>
  
</form>