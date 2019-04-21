<?php 
	if (isset($_POST['name'])) {
		$name 	= $_POST['name'];
		$email 	= $_POST['email'];
		$data   = "Welcome ".$name;
		$data	.= "<br>Your email address is: ".$email;
		echo $data;
	}
?>