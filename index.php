<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Car Rental Service</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Rent24</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Destination</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cars</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Offers</a>
      </li>
    </ul>
  </div>
</nav>

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
          <button type="submit" class="btn btn-primary">Log in</button>
        </form>
      </div>
    </div>
  </div>
</div>



	<?php
	include("connect.php");
	
	

	?>


</body>
</html>

