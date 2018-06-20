<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "rentCar";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

define ('ROOT', 'http://localhost/php_exercises/FSWD40-PHP_CHALLENGE/');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "";
?>

