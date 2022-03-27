<!DOCTYPE html>
<html lang="en">

<head>
	<title>Menu</title>
</head>

<body>

	<?php
	session_start();
	if (isset($_SESSION['Name'])) {
		echo "Welcome " . $_SESSION['Name'] . ".<br>";
	} else {
		echo "Welcome, Unknown user.<br>";
	}
	?>
	<a href='home.php'>Home</a><br>
	<a href='slide.php'>Gallery</a><br>
	<a href='Login.php'>Login</a><br>
	<a href='SignUp.php'>Signup Here</a><br>
	<br><br>
</body>

</html>