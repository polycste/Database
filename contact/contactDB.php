<?php
	class ContactBD{
		public $conn;
		public function_construct(){
			$servername	="localhost";
			$username	="root";
			$password	="";
			$db			="contact";

		$conn=new mysqli($servername,$username,$password,$db);//mysqli is class. argument are constructor

		}
	}

?>