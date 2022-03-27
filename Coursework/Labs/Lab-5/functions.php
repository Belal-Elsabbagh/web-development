<?php

function check_login($con)
{
  if(isset($_SESSION['ID']))
  {
    $id = $_SESSION['ID'];
    $query = "select * from users where user_id = '$id' limit 1";

    $result = $con->query($query);

    if(!$result || mysqli_num_rows($result) <= 0)
    {
      header("Location: Login.php");
      die;
    }
    return mysqli_fetch_assoc($result);
  }
}