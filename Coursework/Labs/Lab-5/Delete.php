<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab06";
session_start();

$id = $user_data['ID'];
$sql = "delete from user where ID = '$id'";
$result = $conn->query($sql);
if($result)
{
	/* Complete */
	header("Location:home.php");
}
else
{
	echo $sql;
}
		
?>