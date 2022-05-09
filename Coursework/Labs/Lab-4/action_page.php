<?php
session_start();

function insert_entry()
{
    $mysqli = new mysqli("localhost", "root", "", "lab4") or die("ERROR: Could not connect. " . $mysqli->connect_error);
       
    $sql = "INSERT INTO users (`name`, `password`) VALUES ({$_POST['name']}, {$_POST['password']});";
    if($mysqli->query($sql) === false)
    {
        die("ERROR: Could not able to execute $sql. " . $mysqli->error);
    }
    echo "Query successful";
    
    $mysqli->close();
}

if($_POST['password'] != $_POST['confirm_password']){ die("Passwords do not match"); }

insert_entry();