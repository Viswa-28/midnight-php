<?php
$servername = "localhost";
$database = "midnight";
$username = "root";
$password = "";

$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
// else {
//     echo "Connected successfully";
// }
?>