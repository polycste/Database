<html>
<body>
<?php

	include "connect.php";

	if(isset($_POST['car_id']))
	{   
        $car_id = $_POST['car_id'];
		
	}
	
	if(isset($_POST['employee_id']))
	{ 
        $employee_id = $_POST['employee_id'];
		
	}
	
	if(isset($_POST['car_name']))
	{ 
        $employee_id = $_POST['car_name'];
		
	}
	
	 
       /* $sql = "INSERT INTO car_info(car_id,employee_id,car_name) VALUES
		       ('$car_id,'$employee_id','$car_name')";
        
        if($conn->query($sql)===TRUE)
		{
			echo "New record create sucessfully" . $conn->insert_id;
		}
		else
		{
           echo "Error: " .$sql . "<br>" . $conn->error;
		}*/
		
	   $sql = "SELECT * FROM car_details";
       $result = $conn->query($sql);
	   echo "<pre>";
	   print_r($result);
	   echo "</pre>";
	   
	?>
	
	<h1>Details Information About The Company </h1>
    <table border="1">
    <tr>
        <th>Car Id</th>
        <th>Employee Id</th>
		<th>Car Name</th>
    </tr>
 	
	 <?php
         if($result->num_rows>0) {
             while ($row = $result->fetch_assoc()) {
                 echo "<tr><td>{$row['car_id']}</td><td>{$row['employee_id']}</td><td>{$row['car_name']}</td></tr>\n";
             }
         }

     ?>
		
		
    </table>
  </body>
    </html>
	<br><br>
	
	<form  action="car_employee.php" method="post">
	<h1>Please Give Information</h1>
   
	Car Name: <select name="car_name">
				  <option value="toyota">toyota</option>
				  <option value="pajaro">pajaro</option>
				  <option value="jigjag">jigjag</option>
				  <option value="beluchi">beluchi</option>
			 </select><br><br>
    Company: <input type="text" name="company"><br><br>
	Model: <input type="text" name="model"><br><br>
	
    <br><br>
	Click Here: <input type="submit" value="Submit"/>
  
</form>