<?php

        include'connect1.php';
        
       $category_id=$_GET['category_id'];
        
    	$sql = "DELETE FROM Category WHERE category_id=$category_id";
		
		if ($conn->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . $conn->error;
		}
       echo $category_id;
       
        
?>
