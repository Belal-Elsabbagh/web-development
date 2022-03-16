<?php
session_start();
// $_SESSION["fname"] = $_POST["fname"];
// $_SESSION["lname"] = $_POST["lname"];
// $_SESSION["address"] = $_POST["address"];
// $_SESSION["course"] = $_POST["course"];

// echo "First name: ".$_SESSION["fname"]."<br>";
// echo "Last name: ".$_SESSION["lname"]."<br>";
// echo "Address: ".$_SESSION["address"]."<br>";
// echo "Course: ".$_SESSION["course"]."<br>";
function insert_entry()
{
    $mysqli = new mysqli("localhost", "root", "", "lab4");
    
    if($mysqli === false)
    {
        die("ERROR: Could not connect. " . $mysqli->connect_error);
        return;
    }
    
    $sql = "INSERT INTO users (`name`, `password`) VALUES ({$_POST['name']}, {$_POST['password']});";
    if($mysqli->query($sql) === false)
    {
        die("ERROR: Could not able to execute $sql. " . $mysqli->error);
        return;
    }
    echo "Query successful";
    
    $mysqli->close();
}

if($_POST['password'] != $_POST['confirm_password']){ die("Passwords do not match"); }

insert_entry();