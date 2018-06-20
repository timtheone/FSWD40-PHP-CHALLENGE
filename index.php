<?php 
// session_start();
// require_once 'connect.php';

// if(isset($_SESSION['user'])!="") {
//   header("Location: index.php");
//   exit;
// }

// $error = false;

// if(isset($_POST['submit'])) {

// }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Car Rental Service</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="styleregistration.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</head>

<body>

<!-- Include navbar -->
<?php include('navbar.php') ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
      <div class="description_text col-lg-5 col-md-5 col-sm-5 col-xs-5">
        <h1 class="display-4">Car Rental for your purpose</h1>
        <p class="lead">Check out our new cars and get an account and get a lot of benefits! Join today.</p>
      </div>
      <div class="form-wrapper col-lg-5 col-md-5 col-sm-5 col-xs-5 offset-lg-2 offset-sm-2 offset-md-2 offset-xs-2">
        <h4 class="text-center">Log In</h4>
        <form>
          <div class="form-group">
            <label for="Username">Username</label>
            <input type="email" class="form-control" id="Username" placeholder="John123">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
          </div>
          <input type="submit" class="btn btn-primary" value="Log in">
          <button type="button" class="btn btn-light float-right"><a href="#">Register</a></button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Include footer -->
<?php include('footer.php') ?>

<?php
include("connect.php");



?>


</body>
</html>

