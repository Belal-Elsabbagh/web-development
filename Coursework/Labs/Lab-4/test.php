<?php session_start(); ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Untitled</title>
    <meta name="description" content="This is an example of a meta description.">
    <link rel="stylesheet" type="text/css" href="theme.css">

</head>

<body>
    <?php
        $name = $_SESSION['username'];
        $username = $_SESSION['email'];

        echo $name . " " . $username;
    ?>
</body>

</html>