<?php
/**
 * Creates connection to database
 *
 * @author  @Belal-Elsabbagh
 *
 * @throws mysqli_sql_exception Emits exception in case of connection error.
 * @return  mysqli  Connection object to the database
 */
function db_connect(): mysqli
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lab-8";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_errno)
    {
        throw new mysqli_sql_exception('mysqli connection error: ' . $conn->connect_error, $conn->connect_errno);
    }
    return $conn;
}

/**
 * Connects database, runs the given query, and returns the result
 *
 * @author  @Belal-Elsabbagh
 *
 * @throws RuntimeException Thrown if connection was unsuccessful.
 * @throws mysqli_sql_exception Thrown if the query wasn't run successfully.
 *
 * @param string $sql The sql query to run
 *
 * @return mysqli_result|bool The result of the query
 */
function run_query(string $sql): mysqli_result|bool
{
    try
    {
        $conn = db_connect();
    } catch (mysqli_sql_exception $e)
    {
        throw new mysqli_sql_exception($e);
    }
    $result = $conn->query($sql);
    if ($result === false) throw new mysqli_sql_exception("Failed to run query.\n$conn->error", $conn->errno);
    $conn->close();
    return $result;
}

/**
 * Checks if mysqli_result is empty by checking if its null and the number of rows it returned is zero.
 *
 * @author @Belal-Elsabbagh
 *
 * @param mysqli_result|null $result
 *
 * @return bool
 */
function empty_mysqli_result(?mysqli_result $result): bool
{
    return $result && $result->num_rows == 0;
}

function insert_pic_into_directory(array $picture_file, string $new_filename, string $directory): string
{
    $pic_info = pathinfo($picture_file['name']);
    $pic_extension = $pic_info['extension'];
    $pic_filename = $new_filename . '.' . $pic_extension;
    move_uploaded_file($picture_file['tmp_name'], $directory . $pic_filename);
    return $pic_filename;
}

/**
 * Checks if post contains data.
 *
 * @author @Belal-Elsabbagh
 * @return bool True if post contains data, false otherwise.
 */
function post_data_exists(): bool
{
    return ($_SERVER['REQUEST_METHOD'] == 'POST');
}

/**
 * Checks if file was uploaded.
 *
 * @author @Belal-Elsabbagh
 * @return bool True if file uploaded, false otherwise.
 */
function fileUploaded(string $file_post_name): bool
{
    return (file_exists($_FILES[$file_post_name]['tmp_name']) && is_uploaded_file($_FILES[$file_post_name]['tmp_name']));
}