<?php require 'connection.php'; ?>
<?php
//for update
if (isset($_POST['update'])) {
	
	$first_name = $_POST['first_name'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$stmt = $con->query("update registration set first_name='$first_name',address='$address',age='$age' where id=1") or die (mysqli_error($con))."at line number ".__LINE__;
	if ($stmt) {
		echo "Data Updated";
	}
}



$stmt = $con->query('select * from users where id=1') or die (mysqli_error($con))."at line number ".__LINE__;
$data = array();
if ($stmt) {
	$data = $stmt->fetch_assoc();
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
			<input type="text" value="<?php echo $data['first_name']; ?>" name="first_name"><br>
			<label for="">Last Name</label><br>
			<input type="text" value="<?php echo $data['last_name']; ?>" name="last_name"><br>
			<label for="">Age</label><br>
			<input type="number" name="age" value="<?php echo $data['age']; ?>" ><br>
			<button type="submit">Save</button>
		</form>
	</div>
</body>
</html>