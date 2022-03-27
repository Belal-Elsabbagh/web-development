<?php
session_start();

include("connection.php");
include("functions.php");

$emailError = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") { //check if form was submitted
	if (empty($_POST['Email']) || empty($_POST['Name']) || empty($_POST['Address']) || empty($_POST['Password'])) {
		$emailError = "All fields are required";
	} else {
		$name = $_POST['Name'];
		$address = $_POST['Address'];
		$email = $_POST['Email'];
		$pass = $_POST['Password'];

		$sql = "insert into user (Name, Email, Password, Address) values ('$name', '$email', '$pass', '$address')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			header("Location:Login.php");
		} else {
			echo $sql;
		}
	}
}
?>

<h1>SignUp</h1>
<form action="" method="post">
	Name:<br>
	<input type="text" name="Name"><br>
	Email:<br>
	<input type="text" name="Email"> <?php echo $emailError; ?><br>
	Address:<br>
	<input type="text" name="Address"><br>
	Password:<br>
	<input type="Password" name="Password"><br>
	<input type="submit" value="Submit" name="Submit">
	<input type="reset">
</form>