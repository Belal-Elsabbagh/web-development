<?php 
include "home.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab06";

echo "<form method='post'>";
echo "Name: <input type= 'text'  name= 'name'  value=".$user_data['Name']."><br>";
echo "Address: <input type= 'text'  name= 'address' value=".$user_data['Address']."><br>";
echo "<input type= 'submit'  name= 'submit'  value= 'Submit' ><br>";
echo"</form>";
//check if form is submitted and update the values
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$id = $user_data['ID'];
	$name = $_POST['Name'];
	$add = $_POST['Address'];
	$sql="update user set Name = '$name', Address = '$add' where ID = '$id'";
	$result = $conn->query($sql) or die("Couldn't execute");
	header("Location:Login.php");
}
?>
