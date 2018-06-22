<!-- Include navbar + head tag -->
<?php include('navbar.php') ?>

<?php 
session_start();

$error = false;

if(isset($_POST['login'])) {
    $user_name = trim($_POST['user_name']);
    $user_name = strip_tags($user_name);

    $email = trim($_POST['email']);
    $email = strip_tags($email);

    $pass = trim($_POST['password']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);


    if(empty($user_name)) {
      $error = true;
      $user_nameError = "Please enter your user name!";
    }

    if(empty($email)){
      $error = true;
      $emailError = "Please enter your email address.";
     } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
      $error = true;
      $emailError = "Please enter valid email address.";
     }

    if(empty($pass)) {
      $error = true;
      $passError = "Please enter your password!" ;
    }

    if(!$error) {
      $password = hash('sha256', $pass);
      echo $pass."<br>";
      echo $password."<br>";
      $res = mysqli_query($conn, "SELECT driver_id,driver_user_name,email,driver_password FROM driver WHERE email='$email'");
      $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
      $count = mysqli_num_rows($res);
      echo $count."<br>";;
      echo $row['driver_password']."<br>";
      if($count == 1 && $row['driver_password'] == $password) {
        $_SESSION['user'] = $row['driver_id'];
        header("Location: dashboard.php");
      } else {
        $errMSG = "Incorrect Credentials, Try again...";
      }
    }
    
  }

?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
      <div class="description_text col-lg-5 col-md-5 col-sm-5 col-xs-5">
        <h1 class="display-4">Car Rental for your purpose</h1>
        <p class="lead">Check out our new cars and get an account and get a lot of benefits! Join today.</p>
        <?php if(isset($_SESSION['user'])!="") { ?>
          <button type="button" class="btn btn-warning"><a href="<?php echo ROOT_URL."dashboard.php" ; ?>">Dashboard</a></button>
          <button type="button" class="btn btn-light float-right"><a href="logout.php?logout">Log Out</a></button>
        <?php } ?>
      </div>
      
        <?php if(isset($_SESSION['user'])=="") { ?>
        <div class="form-wrapper col-lg-5 col-md-5 col-sm-5 col-xs-5 offset-lg-2 offset-sm-2 offset-md-2 offset-xs-2">
        <h4 class="text-center">Log In</h4>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

        <?php
        if ( isset($errMSG) ) {
        echo $errMSG; ?>
                      
        <?php
          }
        ?>  
          <div class="form-group">
            <label for="Username">Username</label>
            <input type="text" class="form-control" name="user_name" placeholder="John123">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary" name="login">Sign In</button>
          <button type="button" class="btn btn-light float-right"><a href="<?php echo ROOT_URL."registration.php" ; ?>">Register</a></button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php }?>
</div>
</div>
</div>
</div>
        
      

<!-- Include footer + closing html tag -->
<?php include('footer.php') ?>

</body>
</html>

