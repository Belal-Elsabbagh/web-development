<?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $mysqli = new mysqli("localhost", "root", "") or die("ERROR: Could not connect. " . $mysqli->connect_error);
    
    // Attempt create database query execution
    $sql = "INSERT INTO `users` (`username`, `password`) VALUES "."(".$_POST['name'].", ".$POST['password'].");";
    if($mysqli->query($sql) === true){
        echo "Database created successfully";
    } else{
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    }
    
    // Close connection
    $mysqli->close();
?>
