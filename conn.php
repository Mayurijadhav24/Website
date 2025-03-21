<?php
//connecting to database
$host = 'localhost';
$username = 'root';
$password = '';
$db='db';

// create a connection
$conn = mysqli_connect($host, $username, $password, $db);
if(! $conn)
{
    die('could not connect:' . $mysqli_error());
}
echo 'connected successfully';
//mysqli_close($conn);
?>
