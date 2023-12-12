<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "sekolahku";

$conn = new mysqli($servername, $username, $password, $sekolahku);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$conn->close();
?>