<html>
<body>
<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db = "registration";
		
		//create connection
		$conn = new mysqli($servername,$username,$password,$db);

			//check connection
			if($conn->connect_error)
			{
				die("Connection failed: " . $conn->connect_error);
			}
			echo "Connected Successfully","<br>";

	if(isset($_POST['name']))
	{   
        $name = $_POST['name'];
		//echo $name."<br>";
	}
	
	if(isset($_POST['email']))
	{ 
        $email = $_POST['email'];
		//echo $email."<br>";
	}
	
	if(isset($_POST['country']))
	{
		 $country = $_POST['country'];
		//echo $country."<br>";
	}
	
	if(isset($_POST['message']))
	{ 
         $message = $_POST['message'];
		 echo $message."<br>";
	}
	 if(isset($_POST['submit']))
	 {
		 $name = $_POST['name'];
		 $email = $_POST['email'];
		 $country = $_POST['country'];
		  $message = $_POST['message'];
		  
        $sql = "INSERT INTO information(name,email,country,message) VALUES
		       ('$name','$email','$country','$message')";
        
        if($conn->query($sql)===TRUE)
		{
			//echo "New record create sucessfully" . $conn->insert_id;
			echo "thank you" , $name , "<br>", "Your serial no.". $conn->insert_id;
		}
		else
		{
           echo "Error: " .$sql . "<br>" . $conn->error;
		}
	}
		
	   $sql = "SELECT * FROM information";
       $result = $conn->query($sql);
	   echo "<pre>";
	   print_r($result);
	   echo "</pre>";
	   
	?>
	
	<h1> Store Data Of The Database </h1>
    <table border="1">
    <thead>
    <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Name</th>
        <th>Country</th>
		<th>Message</th>
    </tr>
    </thead>
	 <?php
         if($result->num_rows>0) {
             while ($row = $result->fetch_assoc()) {
                 echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['country']}</td><td>{$row['message']}</td></tr>\n";
             }
         }

        ?>
    </table>


  </body>
    </html>
	
	<form align ="center" action="contact.php" method="post">
   
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    <select name="country">
      <option value="BD">Bangladesh</option>
	  <option value="india">India</option>
	  <option value="japan">Japan</option>
	  <option value="nepal">Nepal</option>
	</select>
    <br><br>	
	Message: <textarea name="message" rows="10" cols="30"></textarea><br><br>
	<input type="submit" value="Submit"/>
  
</form>

