<?php
function construct_navbar_brand(): string{
  return "<a class='navbar-brand' href='#'><span><img src='img/{$_SESSION['pfp']}' class='img-circle' width='36' class>Welcome {$_SESSION['username']}<span></a>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <?php
                session_start();
                echo construct_navbar_brand();
                ?>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Sign Out</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-trash"></span> Delete Account</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Messages</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            </ul>
        </div>
    </nav>
    <div>
        <h1>Welcome</h1>
    </div>
</body>

</html>