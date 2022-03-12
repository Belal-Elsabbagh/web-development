<?php
/*
1. Connect
2. Prepare Query
3. 

*/



function TEST_get_from_database()
{
  $connect = new mysqli("localhost", "root", null, "practice"); //-- 1
  if($connect->connect_error) {die("Fatal Error");}

  $query = "select * from users"; //-- 2

  $result = $connect->query($query); 
  if(!$result){die("Fatal Error");}
  
  $row = $result->fetch_array(MYSQLI_ASSOC); //return rows in sequential order
  
  echo "The ID is ".$row['ID']."\nThe Name is ".$row['name'];
}

