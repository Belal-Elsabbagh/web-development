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
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
            <br>
            <label for="password">Password:</label>
            <input type="text" id="password" name="password">
            <br>
            <label for="confirm_password">Confirm Password:</label>
            <input type="text" id="confirm_password" name="confirm_password">
            <input type="submit" value="Submit">
        </div>
    </form>
</body>

</html>