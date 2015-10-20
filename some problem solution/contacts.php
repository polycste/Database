<html>
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
    
    $submit = FALSE;
    if(isset($_POST['submit1'])) { 
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
                 echo "Thanks " . $name . " for contacting with us";
                 $submit = TRUE;
                 //echo "<a href=\"view.php\">View All</a>";
                }
                else
                {
                    echo "error".$sql."<br>".$conn->error;
                }
        }
    }
    

  ?>
   
    <div class="panel-body">
        <form method="post" action="contacts.php">
            Name:
            <input type="text" name="name">
            <br>
            Email:
            <input type="text" name="email">
            <br>
            Country:
            <input type="text" name="country">
            <br>
            Message:
            <textarea name="message" cols="30" rows="10"></textarea>
            <br>
            <button type="submit" name="submit1">Submit</button>
        </form>
    </div>
    
    <?php
        if($submit)
        {
           echo "we will contact with you soon","<br>";
           echo "<a href=\"view.php\">View all response</a>";
        }
    ?>
</html>