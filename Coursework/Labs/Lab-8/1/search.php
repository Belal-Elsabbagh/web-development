<?php
include_once "../functions.php";
$q = $_GET['q'];
try
{
  $result = run_query("SELECT username FROM user WHERE username = '$q';");
  echo empty_mysqli_result($result)? "Username available" : "Username is Already taken";
}
catch(Exception $e)
{
  die($e->getMessage());
}
?>