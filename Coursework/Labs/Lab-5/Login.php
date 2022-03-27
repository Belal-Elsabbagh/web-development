<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") 
{ //check if form was submitted
	if (empty($_POST['Email']) || empty($_POST['Password']))
	{
		$emailError = "All fields are required";
	} 
	else
	{
		$email = $_POST['Email'];
		$pass = $_POST['Password'];

		$sql = "select * from user where Email = '$email' limit 1";
		$result = $conn->query($sql) or die("Query failed");
		if ($result) 
		{
			if ($result && mysqli_num_rows($result) > 0) 
			{
				$user_data = mysqli_fetch_assoc($result);
				if($user_data['Password'] == $pass)
				{
					$_SESSION['Name'] = $user_data['Name'];
					
					header("Location:menu.php");
				}
				else
				{
					die("Wrong password");
				}
			}
			else
			{
				die("Wrong credentials");
			}
		} 
		else 
		{
			die("The query didn't work :(");
		}
	}
}
?>
<h1>Login</h1>
<form method="post">
	Email:<br>
	<input type="text" name="Email"> <br>
	Password:<br>
	<input type="Password" name="Password"><br>
	<input type="submit" value="Submit" name="Submit">
	<input type="reset">
	<a href="SignUp.php">Click to Sign Up</a>
</form>