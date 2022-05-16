<?php
include_once "../functions.php";
function signUp(): void
{
    if (!post_data_exists())
        throw new RuntimeException("{$_SERVER['REQUEST_METHOD']} form isn't submitted to the database.");

    if (!fileUploaded('pfp') || !fileUploaded('pfp'))
        throw new RuntimeException("image not uploaded into the database.");

    $pfp_name = insert_pic_into_directory($_FILES['pfp'], $_POST['username'], "img/");

    try
    {
        $sql = "INSERT INTO user 
            (username, password, profile_picture_file_name) 
            VALUES 
            ('{$_POST['username']}','{$_POST['password']}','$pfp_name');";
        run_query($sql);
    } catch (Exception $e)
    {
        echo $e->getMessage();
        throw new RuntimeException("unable to signup.");
    }

}

signUp();