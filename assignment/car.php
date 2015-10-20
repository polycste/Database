<html>
<body>
<?php

	include "connect.php";

	if(isset($_POST['car_name']))
	{   
        $car_name = $_POST['car_name'];
		
	}
	
	if(isset($_POST['company']))
	{ 
        $company = $_POST['company'];
		
	}
	
	if(isset($_POST['model']))
	{
		 $model = $_POST['model'];
		
	}
	
	 
       /* $sql = "INSERT INTO car_info(car_name,company,model) VALUES
		       ('$car_name','$company','$model')";
        
        if($conn->query($sql)===TRUE)
		{
			echo "New record create sucessfully" . $conn->insert_id;
		}
		else
		{
           echo "Error: " .$sql . "<br>" . $conn->error;
		}*/
		
	   $sql = "SELECT * FROM car_info";
       $result = $conn->query($sql);
	   echo "<pre>";
	   print_r($result);
	   echo "</pre>";
	   
	?>
	
	<h1> Car Information </h1>
    <table border="1">
    <tr>
        <th>car_id</th>
        <th>Car Name</th>
        <th>Company</th>
        <th>Model</th>
    </tr>
 	
	 <?php
         if($result->num_rows>0) {
             while ($row = $result->fetch_assoc()) {
                 echo "<tr><td>{$row['id']}</td><td>{$row['car_name']}</td><td>{$row['company']}</td><td>{$row['model']}</td></tr>\n";
             }
         }

        ?>
		
		
    </table>
  </body>
    </html>
	<br><br>
	<form  action="car.php" method="post">
	<h1>Please Fill The Form</h1>
   
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