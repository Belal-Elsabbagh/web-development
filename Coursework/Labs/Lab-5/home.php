<!DOCTYPE html>
<html lang="en">

<head>
  <title>Menu</title>
</head>

<body>
  <?php
  session_start();

  include("connection.php");
  include("functions.php");
  $user_data = check_login($conn);

  ?>
  <h1>Welcome</h1>
</body>

</html>