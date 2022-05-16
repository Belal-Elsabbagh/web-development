<?php
include_once "../functions.php";
/**
 * @throws Exception Emits exception in case of error.
 */
function log_in(): array
{
    if(!post_data_exists()) throw new Exception("Form was not submitted correctly");
    $result = run_query("SELECT username, password, profile_picture_file_name FROM user WHERE username = '{$_POST['username']}' AND Password = '{$_POST['password']}';");
    if(empty_mysqli_result($result)) throw new Exception("Incorrect Username or password");
    return $result->fetch_assoc();

}
try
{
    session_start();
    $active_user = log_in();
    echo $active_user['username'];
    $_SESSION['username'] = $active_user['username'];
    $_SESSION['pfp'] = $active_user['profile_picture_file_name'];
    header("Location: http://localhost/Web-Development/Coursework/Labs/Lab-8/2/home.php");
    exit();
} catch (Exception $e)
{
    echo $e->getMessage();
}