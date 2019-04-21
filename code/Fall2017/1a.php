<?php require 'connection.php'; ?>
<?php
//for update
function validation($data)
{
	$data = trim($data);
	$data = htmlspecialchars($data);
	$data = stripcslashes($data);
	return $data;
}

$errors = array();
if (isset($_POST['register'])) {

	$first_name = validation($_POST['first_name']);
	$last_name 	= validation($_POST['last_name']);
	$age 		= validation($_POST['age']);
	
	if ($first_name == '') {
		array_push($errors, "First name must not be empty<br>");

	}else if(strlen($first_name) < 3)
	{
		array_push($errors, "First name must be 3 characters long<br>");
	}

	if ($last_name == '') {
		array_push($errors, "Last name must not be empty<br>");
	}

	if ($age == '') {
		array_push($errors, "Age must not be empty<br>");
	}

	if (count($errors) > 0) {
		
		foreach ($errors as $error) {
			echo $error;
		}
	}
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form</title>
	<style>
		.wrapper{
			width: 80%;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<h1>Registration Form</h1>
		<form action="" method="post">
			<label for="">First Name</label><br>
			<input type="text" name="first_name"><br>
			<label for="">Last Name</label><br>
			<input type="text" name="last_name"><br>
			<label for="">Age</label><br>
			<input type="number" name="age"><br>
			<button type="submit" name="register">Register</button>
		</form>

	</div>
</body>
</html>