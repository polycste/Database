<html>
<body>
<?php

   $category_name = $_POST['category_name'];
    
	
	if(isset($_POST['category_name']))
	{   
        $category_name = $_POST['category_name'];
		//echo $name."<br>";
	}

		$servername = "localhost";
		$username = "root";
		$password = "";
		$db = "blog";
		
		//create connection
		$conn = new mysqli($servername,$username,$password,$db);

			//check connection
			if($conn->connect_error)
			{
				die("Connection failed: " . $conn->connect_error);
			}
			echo "Connected Successfully","<br>";
			
			 
		 //insert data
	  if(isset($_POST['submit']))
	  {
           $sql = "INSERT INTO Category(category_name) VALUES
    		       ('$category_name')";
            
            if($conn->query($sql)===TRUE)
    		{
    			echo "New record create sucessfully" . $conn->insert_id;
    		}
    		else
    		{
               echo "Error: " .$sql . "<br>" . $conn->error;
    		}
	  }
	  
	  if(isset($_POST['submit']))
	  {
           $sql = "INSERT INTO Category(category_name) VALUES
    		       ('$category_name')";
            
            if($conn->query($sql)===TRUE)
    		{
    			echo "New record create sucessfully" . $conn->update;
    		}
    		else
    		{
               echo "Error: " .$sql . "<br>" . $conn->error;
    		}
	  }
	  
	  
	 	// sql to delete a record
		/*$sql = "DELETE FROM Category WHERE category_id=1";
		
		if ($conn->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . $conn->error;
		}*/
		
		
		//sql to update a record
        $sql = "UPDATE Category SET category_name='Culture' WHERE category_id=4";
        
        if (mysqli_query($conn, $sql)) 
        {
            echo "Record updated successfully";
        } 
        else
        {
            echo "Error updating record: " . mysqli_error($conn);
        }

		
	   $sql = "SELECT * FROM Category";
       $result = $conn->query($sql);
	   /*echo "<pre>";
	   print_r($result);
	   echo "</pre>";*/
	   
	?>
	
	<h1> Category of the blog </h1>
    <table border="2">
    <thead>
    <tr>
        <th>Category Id</th>
        <th>Category Name</th>
        <th>Created At</th>
        <th>Update</th>
        <th>Delete</th>
        
    </tr>
    </thead>
	 <?php
         if($result->num_rows>0) {
             //echo '<tr><td colspan="4">No Rows Returned</td></tr>';
             // }else{
             while ($row = $result->fetch_assoc()) {
                 echo "<tr>
                 <td>{$row['category_id']}</td>
                 <td>{$row['category_name']}</td>
                 <td>{$row['created_at']}</td>
                 <td>
                    <a href=\"update.php?category_id={$row['category_id']}\">update</a>
                </td>
                 <td>
                    <a href=\"delete.php?category_id={$row['category_id']}\">delete</a>
                </td></tr>\n";
             }
         }

      ?>
    </table>


  </body>
    </html>
	
<form align ="center" action="category.php" method="post">
	    <br><br>
   <h1>Category Table</h1>
   Name: <input type="text" name="category_name"><br><br>
   
	<input type="submit" value="Submit"/>
  
</form>

