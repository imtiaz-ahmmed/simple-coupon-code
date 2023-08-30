<?php
$url = 'localhost';
$username = "root";
$password = "";
$dbname = "school";
$conn = mysqli_connect($url, $username, $password, $dbname);
/* Check connection */
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>