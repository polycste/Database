<?php
   $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "contacts";
    //mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
    //mysql_select_db($dbname) or die('database selection problem');

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   // echo "Connected successfully";
   
    $sql = "SELECT * FROM personalinfo WHERE status = 1";
    $res = $conn->query($sql);

   if($res->num_rows > 0)
   {
       echo "<table border=\"1\"><tr><th>User Name</th><th>Message</th></tr>";
        while($row=$res->fetch_assoc())
        {
            echo "<tr><td>{$row['name']}</td><td>Its nice to work with you.</td></tr>"; 
        }
       echo "</table>";
   }
   else
   {
        echo "0 results";
   }
    
   $conn->close();
    
    
?>