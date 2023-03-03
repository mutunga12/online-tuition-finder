<!DOCTYPE html>
<html>
  <head>
    <title>Educational registration form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="signup.css">
  </head>
  <body >
  <?php

// initializing variables
$username = "";
$email    = "";
$password_1="";
//$password_2="";
$phone="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'tuition_db');

// REGISTER USER
if (isset($_REQUEST['username'])) {
  // receive all input values from the form
  $username = stripslashes($_REQUEST['username']);
  
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email    = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = stripslashes($_REQUEST['phone']);
  $phone=mysqli_real_escape_string($db, $_POST['phone']);
  $password = stripslashes($_REQUEST['password1']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password1']);
  //$password_2 = stripslashes($_REQUEST['password2']);
 // $password_2 = mysqli_real_escape_string($db, $_POST['password2']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM reg_db WHERE fname='$username' AND email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_num_rows($result);
  if($user>0) {
      echo "<div class='form'style='text-align:center;color: red;'>
      <h3>Notice ! user already exist</h3><br/>
      <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
      </div>";
    }
  // Finally, register user if there are no errors in the form
  else {
  	$password = md5($password_1);//encrypt the password before saving in the database
  	$query = "INSERT INTO reg_db (fname, email,phone, passwords) 
  			  VALUES('$username', '$email','$phone', '$password')";
  	$results=mysqli_query($db, $query);
    if ($results) {
      echo "<div class='form-success'style='text-align:center;color: orange;'>
            <h3>You have registered successfully.</h3><br/>
            <p class='link'>Click here to <a href='login.php'>Login</a></p>
            </div>";
  } else {
      echo "<div class='form'>
            <h3>Required fields are missing.</h3><br/>
            <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
            </div>";
  }

  	// $_SESSION['fname'] = $username;
  	// $_SESSION['success'] = "You are now logged in";
    // header("Location: login.php");
}}
else{
// 
?>
    
      </div>
      <form action="" method='post'autocomplete="on">
         <!-- How registering went -->
        <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
        <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <?php if(isset($rmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $rmsg; ?> </div><?php } ?>

        <section class="signup-form">
    <h1>Sign Up</h1>
<form action="" method="POST">

<input type="text" name="username" placeholder="Full name.." required><br><br>
<input type="text" name="email" placeholder="Email..." required><br><br>
<input type="text" name="phone" placeholder="phone number.." required><br><br>
<input type="password" name="password1" placeholder="Password" required><br><br>

<button type="submit" name="submit">Sign Up</button>
</form> 
<p>Already Have an account? <a href="forgortpass.php">Forgort password!</a></p>
<a href="login.php">Log in here!</a>


    </div>
    <style>
     .signup-form{
    margin: 10% auto;
    display: block;
    width: 500px;
    
    text-align: center;
    align-items: center;
    justify-content: center;
    color: red;
    background-color: azure;
}
input{
    border: 16px solid #f2f2f2;
   
    
}body {
  min-height: 100%;
  background: #e3f2fd;
}
      
    </style>
  </body>
</html>
<?php
}
?>