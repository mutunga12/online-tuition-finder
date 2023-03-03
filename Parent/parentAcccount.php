

<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
  //	Redirect to user dashboard page
    header("Location:../Parent/login.php");
exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="parent.css">
    <style>

    </style>
</head>
<body style="background-image: linear-gradient(45deg,
              rgba(245,70,66, 0.75),
              rgba(8,83,156, 0.75)), url('pexels-photo-919278.jpeg');">


<style>
  
</style>
    <div class="wrapper">
        <!--Top menu -->
        <div class="sidebar">
           <!--profile image & text-->
            <!--menu item-->
            <div class="profile">
                <img src="imageTuition.jpg" alt="profile_picture">
                <h3><?php echo $_SESSION['username']; ?></h3>
                <p>Student</p>
            </div>
            <ul>
                <li>
                    <a href="../Home/index.php" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="userprofile.php">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">User Profile</span>
                    </a>
                </li>
                <li>
                      <a href="booking.php">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="item">Booking</span>
                    </a>
                </li>
                <li>
                    <a href="history.php">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="item">History</span>
                    </a>
                </li>
                
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-logout"></i></span>
                        <span class="item"><a href="login.php">Logout</a></span>
                    </a>
                </li>
                <li>
                    <a href="signup.php">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Sign UP</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="section">
        <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['username'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	// echo $_SESSION['username']; 
          	// unset($_SESSION['username']);
          ?>
          <img src="images3.jpg" alt=""width:200px height="400px">
      	</h3>
      </div>
  	<?php endif ?>

    
</div>
            <div class="top_navbar">
                
                <div class="hamburger">

                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
               <div class="youloged"style="float:right">
                 <!-- logged in user information -->
                 <?php  if (isset($_SESSION['username'])): ?>
                        <p class="loggedin"> Welcome you logged in as<strong style="margin:10px ;"><?php echo $_SESSION['username']; ?></strong></p>
                        
                    <?php endif ?>
               </div>
            </div>
        </div>
        </div>
    </div>
  <script>
var hamburger = document.querySelector(".hamburger");
hamburger.addEventListener("click", function(){
    document.querySelector("body").classList.toggle("active");
})
  </script>

  <!-- <marquee class="marque" behavior="alternate" direction="left" truespeed="true" scrolldelay="20">Tailoring To Each student's unique learning style 
    and goals</marquee>  -->

  <!-- testing -->

  <div class="main">
  <h3>WELCOME TO ONLINE TUITION FINDER: <div class="roller">
    <span id="rolltext">WE<br/>
    OFFER<br/>
    ONLINE TEACHERS ONLINE TO TEACH YOUR CHILDREN IN HOLIDAYS<br/>
    <span id="spare-time">too much spare time?</span><br/>
    </div>
    </h3>
    
  </div>
  


  <!--  -->
</body>
<style>
body {
  min-height: 100%;
  background: blue;
}
.loggedin{
    color:white;
    
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 1.2rem;
    
    margin-left: 300px;
}


* {
  margin:0;
  padding:0;
  font-family: 'Arvo';
}

body{
  /* background-image: yellow; */
}

.main{
  height:100vh;
  width:100%;  
  display:flex;
  align-items:top;
  justify-content:center;
  text-align:center;
  margin-top: 30px;
}
h1{
  text-align:center;
  text-transform: uppercase;
  color: #F1FAEE; 
  font-size: 4rem;
}

.roller{
  height: 4.125rem;
  line-height: 4rem;
  position: relative;
  overflow: hidden; 
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  
  color: white;
}
.marque{
  color: darkblue;
  margin-top: 30px;
  font-size: 1.725rem;
  
 
}

#spare-time{
  font-size: 1rem;
  font-style: italic;
  letter-spacing: 1rem;
  margin-top: 0;
  color: #A8DADC;
  
}

.roller #rolltext {
  position: absolute;
  top: 0;
  animation: slide 5s infinite;  
}

@keyframes slide {
  0%{
    top:0;
  }
  25%{
    top:- 4rem;    
  }
  50%{
    top:- 8rem;
  }
  72.5%{
    top: -12.25rem;
  }
}

@media screen and (max-width: 600px){
  h1{
  text-align:center;
  text-transform: uppercase;
  color: #F1FAEE; 
  font-size: 2.125rem;
}
  
  .roller{
  height: 2.6rem; 
  line-height: 2.125rem;  
  }
  
  #spare-time {
    font-size: 1rem;
    letter-spacing: 0.1rem;
  }
  
  .roller #rolltext {  
  animation: slide-mob 5s infinite;  
}
  
  @keyframes slide-mob {
  0%{
    top:0;
  }
  25%{
    top: -2.125rem;    
  }
  50%{
    top: -4.25rem;
  }
  72.5%{
    top: -6.375rem;
  }
}
}
</style>
</html>