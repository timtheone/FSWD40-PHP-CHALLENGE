<?php include('navbar.php') ?>
<?php
ob_start();
session_start();
// if session is not set this will redirect to login page
if( !isset($_SESSION['user']) ) {
 header("Location: index.php");
 exit;
}
// select logged-in users detail
$res=mysqli_query($conn, "SELECT * FROM driver WHERE driver_id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
<h2>Success</h2>
<?php include('footer.php') ?>