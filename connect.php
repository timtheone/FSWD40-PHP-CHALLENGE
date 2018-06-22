<?php
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'rentCar');
// Create connection
$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);

define('ROOT_URL', 'http://localhost/php_exercises/FSWD40-PHP_CHALLENGE/');
// Check connection
if ( !$conn ) {
    die("Connection failed : " . mysqli_error());
   }
?>

