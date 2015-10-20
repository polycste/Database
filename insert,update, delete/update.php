<?php 
        include"connect1.php";
        $category_id=$_GET['category_id'];
        //$sql=$obj->select_Category_by_category_id($category_id);
    
       $sql = "UPDATE Category SET category_name='$category_name'  WHERE category_id=$category_id";
        
        if (mysqli_query($conn, $sql)) 
        {
            echo "Record updated successfully";
        } 
        else
        {
            echo "Error updating record: " . mysqli_error($conn);
        }
        echo $category_id;
        
        
/*$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}*/
?>

