<?php require 'connection.php'; ?>
<?php
//for update
if (isset($_POST['update'])) {
	
	$first_name = $_POST['first_name'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$stmt = $con->query("update registration set first_name='$first_name',age='$age',address='$address' where id=1") or die mysqli_error($con)."at line number ".__LINE__;
	if ($stmt) {
		echo "Data Updated"
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
			<label for="">Phone</label><br>
			<input type="text" name="phone"><br>
			<button type="submit">Save</button>
		</form>
	</div>
</body>
</html>