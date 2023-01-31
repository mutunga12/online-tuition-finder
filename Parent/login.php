<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="login.css"/>
</head>
<body>
<?php
$con = mysqli_connect('localhost', 'root', '', 'kabarak_db');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `reg_db` WHERE fname='$username'
                     AND passwords='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            
                header("Location:../Home/index.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    

    <section class="signup-form">
    <h2>Log in</h2>
    <div class="signup-form-form">

<form action="" method="POST">
    
<input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/> <br> <br>
        <input type="password" class="login-input" name="password" placeholder="Password"/> <br><br>
        <input type="submit" value="Login" name="submit" class="login-button"/>

   <p>If you have no account?</p>
<a href="signup.php">Sign up here!</a>
</form>

    </div>
    </section>


<?php
    }
?>
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
   
    
}

</style>
</body>
</html>