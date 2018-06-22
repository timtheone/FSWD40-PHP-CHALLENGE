<!-- Include navbar + head tag -->
<?php include('navbar.php') ?>

<?php 
ob_start();
session_start();
if( isset($_SESSION['user'])!=""){
  header("Location: ".ROOT_URL."index.php");
}
$user_nameError = '';
$emailError = '';
$passError = '';
$carLicenceError = '';
$fnameError = '';
$snameError = '';
$adressError = '';
$birthdayError = '';
$error = false;
if(isset($_POST['submit-btn'])) {

  $user_name = trim($_POST['user_name']);
  $user_name = strip_tags($user_name);
  $user_name = htmlspecialchars($user_name);
  
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);

  $fname = trim($_POST['first_name']);
  $fname = strip_tags($fname);
  $fname = htmlspecialchars($fname);

  $sname = trim($_POST['last_name']);
  $sname = strip_tags($sname);
  $sname = htmlspecialchars($sname);

  $birthday = trim($_POST['birthday']);
  $birthday = strip_tags($birthday);
  $birthday = htmlspecialchars($birthday);

  $carLicence = trim($_POST['carLicence']);
  $carLicence = strip_tags($carLicence);
  $carLicence = htmlspecialchars($carLicence);
  $carLicence = (int)$carLicence;

  $address = trim($_POST['address']);
  $address = strip_tags($address);
  $address = htmlspecialchars($address);
  
  
  // basic name validation
 if (empty($user_name)) {
  $error = true;
  $user_nameError = "Please enter your full User name.";
 } else if (strlen($user_name) < 3) {
  $error = true;
  $user_nameError = "User name must have at least 3 characters.";
 } else if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,32}$/',$user_name)) {
  $error = true;
  $user_nameError = "Name must contain at least 1 number and 1 letter and be between 6-32 characters long.";
 }

 //basic email validation
 if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError = "Please enter valid email address.";
 } else {
  // check whether the email exist or not
  $query = "SELECT email FROM driver WHERE email='$email'";
  $result = mysqli_query($conn, $query);
  $count = mysqli_num_rows($result);
  if($count!=0){
   $error = true;
   $emailError = "Provided Email is already in use.";
  }
 }
 // password validation
 if (empty($pass)){
  $error = true;
  $passError = "Please enter password.";
 } else if(strlen($pass) < 6) {
  $error = true;
  $passError = "Password must have atleast 6 characters.";
 }

//  if (empty($fname || $sname || $birthday || $carLicence || $address)) {
//    $error = true;
//    $fieldError = "Please fill in this field";
//  }

if (empty($fname)) {
  $error = true;
  $fnameError = "Please enter your Name";
} 
if(empty($sname)) {
  $error = true;
  $snameError = "Please enter your Last Name";
} 
if(empty($birthday)) {
  $error = true;
  $birthdayError = "Please enter your date of birth";
} 
if(empty($carLicence)) {
  $error = true;
  $carLicenceError = "Please enter your licence number";
} 
if(empty($address)) {
  $error = true;
  $adressError = "Please enter your address";
}
 


$password = hash('sha256', $pass);
// $password = password_hash($pass, PASSWORD_DEFAULT);



if( !$error ) {
  $sql = "INSERT INTO driver(driver_user_name,email,driver_password,first_name,last_name,birthday,CarLicence,adress)
          VALUES ('$user_name', '$email', '$password', '$fname', '$sname', '$birthday','$carLicence', '$address')";      
  $res = mysqli_query($conn, $sql);

  if ($res) {
    $errTyp = "success";
    $errMSG = "Successfully registered, you may login now";
    unset($user_name);
    unset($email);
    unset($pass);
    unset($fname);
    unset($sname);
    unset($address);
    unset($carLicence);
    unset($birthday);
  } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong";
  }
}

}
?>
<div class="container">
  <h3 class="text-center" id="form-heading">Register now</h3>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" class="col-lg-8 offset-lg-2" id="form-reg">
<?php
if ( isset($errMSG) ) {
 ?>
  <div class="alert alert-<?php echo $errTyp ?>">
                  <?php echo $errMSG; ?>
  </div>

<?php
  }
  ?>
    <div class="form-group row">
      <label for="user_name" class="col-sm-2 col-form-label">User name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="user_name" placeholder="User name">
        <span class="text-danger"><?php echo $user_nameError; ?></span>
      </div>
    </div>
    <div class="form-group row">
      <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="first_name" placeholder="First Name">
        <span class="text-danger"><?php echo $fnameError; ?></span>
      </div>
    </div>
    <div class="form-group row">
      <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="last_name" placeholder="Last Name">
        <span class="text-danger"><?php echo $snameError; ?></span>
      </div>
    </div>
    <div class="form-group row">
        <label for="birthday" class="col-sm-2 col-form-label">Birthday</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" name="birthday" placeholder="Your Birthday">
          <span class="text-danger"><?php echo $birthdayError; ?></span>
        </div>
      </div>

      <div class="form-group row">
        <label for="carLicence" class="col-sm-2 col-form-label">Car Licence</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="carLicence" placeholder="Your Car Licence">
          <span class="text-danger"><?php echo $carLicenceError; ?></span>
        </div>
      </div>

    <div class="form-group row">
      <label for="address" class="col-sm-2 col-form-label">Adress</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="address" placeholder="Your full address">
        <span class="text-danger"><?php echo $adressError; ?></span>
      </div>
    </div>

    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <span class="text-danger"><?php echo $emailError; ?></span>
      </div>
    </div>
    <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" name="pass" placeholder="Password">
        <span class="text-danger"><?php echo $passError; ?></span>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-12">
      <button type="submit" class="btn btn-block btn-primary" name="submit-btn">Sign Up</button>
      </div>
    </div>
  </form>
</div>
<!-- Include footer + closing html tag -->
<?php include('footer.php') ?>

</body>
</html>
<?php ob_end_flush(); ?>

