<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Untitled</title>
    <meta name="description" content="This is an example of a meta description.">
    <link rel="stylesheet" type="text/css" href="theme.css">

</head>

<body>
    <h1>Welcome</h1>
    <button name="button_Show_Form">Show/Hide Form</button>
    <br>
    <form action="action_page.php" method="post">
        <div>
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address">
        </div>
        <br>
        <div>
            <label for="lname">Last name: </label>
            <input type="text" id="lname" name="lname">
            <label for="course">Choose Course</label>
            <select id="courses" name="course">
                <?php include_once "library.php";?>
            </select>
        </div>
        <input type="submit" value="Submit">
    </form>
</body>

</html>