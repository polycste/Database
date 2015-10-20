<html>
<?php

	if(isset($_GET['name'])&&($_GET['email'])&&($_GET['contact']))
	{
		$name=$_GET['name'];
		$email=$_GET['email'];
		$contact=$_GET['contact'];
	
	}
	
?>

	<body>
		<form action="form.php" method="get">
		Name:<input type="text" name="name"/><br>
		E-mail:<input type="text" name="email"/><br>
		Country:<input type="text" name="country"/><br>
		Contact:<input type="number" name="contact"/><br>
		<button type="submit"name="submit">submit</button>
		</form>
	</body>
</html>