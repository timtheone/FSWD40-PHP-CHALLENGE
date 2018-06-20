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

<br>
<h1>Welcome to our awesome community</h1>

<h3>Fill in the form</h3>

<br>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://images.pexels.com/photos/113176/pexels-photo-113176.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.pexels.com/photos/539858/pexels-photo-539858.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.pexels.com/photos/301584/pexels-photo-301584.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<form>

<div class="form-group row">
    <label for="inputfirstname" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-10">
      <input type="firstname" class="form-control" id="inputfirstname" placeholder="First_Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputlastname" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-10">
      <input type="lastname" class="form-control" id="inputlastname" placeholder="Last_Name">
    </div>
  </div>
<div class="form-group row">
    <label for="inputbirthday" class="col-sm-2 col-form-label">Birthday</label>
    <div class="col-sm-10">
      <input type="birthday" class="form-control" id="inputbirthday" placeholder="Your Birthday">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputcarlicence" class="col-sm-2 col-form-label">Car Licence</label>
    <div class="col-sm-10">
      <input type="carlicence" class="form-control" id="inputcarlicence" placeholder="Your Car Licence">
    </div>
  </div>

<div class="form-group row">
    <label for="inputadress" class="col-sm-2 col-form-label">Adress</label>
    <div class="col-sm-10">
      <input type="adress" class="form-control" id="inputadress" placeholder="Your full adress">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Select your type of vehicle</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            PKW/VAN
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Truck
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
          <label class="form-check-label" for="gridRadios3">
            Motorcycle
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Register now</button>
    </div>
  </div>
</form>

	<?php
	include("connect.php");
	
	

	?>


</body>
</html>

