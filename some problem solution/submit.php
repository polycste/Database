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
    //echo "Connected successfully";
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $country = $_POST["country"];
    $message = $_POST["message"];
    $status = 0;
    
    if(!empty($name) || !empty($email) || !empty($country) || !empty($message))
    {
       
        $sql = "INSERT INTO personalinfo(name,email,country,messages,status) VALUES('$name','$email','$country','$message',$status)";
         if($conn->query($sql) == TRUE) 
            {
                echo "Thanks " . $name . " for contacting with us, we will contact with you soon";
            }
            else
            {
                echo "error".$sql."<br>".$conn->error;
            }
    }
    else
    {
        echo "Please insert all the inputs";
    }
echo "<a href=\"view.php\">View All</a>";
?>