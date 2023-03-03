<?php

session_start(); 
  if (!isset($_SESSION['username'])) {
  //	Redirect to user dashboard page
    header("Location:../Parent/login.php");
  exit();
  }

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"/>
</head>
<body>
    <nav>
      <div class="logo">

        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">Teachers Dashboard</span>
      </div>
      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-menu menu-icon"></i>
        </div>
        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="../Home/index.php" class="nav-link">
                <i class="bx bx-home-alt icon"></i>
                <span class="link">Home</span>
              </a>
            </li>
            <li class="list">
              <a href="AddDetails.php" class="nav-link">
                <i class="bx bx-bar-chart-alt-2 icon"></i>
                <span class="link">Add Biography</span>
              </a>
            </li>
            <li class="list">
              <a href="notification.php" class="nav-link">
                <i class="bx bx-bell icon"></i>
                <span class="link">Notifications</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-message-rounded icon"></i>
                <span class="link">Messages</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-pie-chart-alt-2 icon"></i>
                <span class="link">Analytics</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-heart icon"></i>
                <span class="link">History</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-account icon"></i>
                <span class="link">Profile</span>
              </a>
            </li>
          </ul>
          <div class="bottom-cotent">
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-log-out icon"></i>
                <span class="link">Logout</span>
              </a>
            </li>
          </div>
        </div>
      </div>
    </nav>
    
    <section class="home">
     <div class="container">
        <div class="row">
            <div class="home-text">
                 <h1>Welcome </h1>
                 <p class="animate-text">
                    <span>Press The Menue Button</span>
                    <span>Navigate through The Items</span>
                    <span>Check if You Have Notifications</span>
                    <span>Check number of work Assigned</span>
                    <span>WE APPRECIATE FOR YOUR TIME</span>
                 </p>
            </div>
        </div>
     </div>
 </section>
    <section class="overlay"></section>
    <script>
      const navBar = document.querySelector("nav"),
        menuBtns = document.querySelectorAll(".menu-icon"),
        overlay = document.querySelector(".overlay");
      menuBtns.forEach((menuBtn) => {
        menuBtn.addEventListener("click", () => {
          navBar.classList.toggle("open");
        });
      });
      overlay.addEventListener("click", () => {
        navBar.classList.remove("open");
      });




      // 
     
         const txts=document.querySelector(".animate-text").children,
               txtsLen=txts.length;
           let index=0;
          const textInTimer=3000,
                textOutTimer=2800;

         function animateText() {
            for(let i=0; i<txtsLen; i++){
              txts[i].classList.remove("text-in","text-out");  
            }
            txts[index].classList.add("text-in");

            setTimeout(function(){
                txts[index].classList.add("text-out");              
            },textOutTimer)

            setTimeout(function(){

              if(index == txtsLen-1){
                  index=0;
                }
               else{
                   index++;
                 }
                animateText();
            },textInTimer); 
         }
         
         window.onload=animateText;
    </script>
</body>
<style>
/* Google Fonts - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
p{
    margin-top: 200px;
    margin-left: 20px;
}
body {
  min-height: 100%;
  background-image: linear-gradient(45deg,
              rgba(245,70,66, 0.75),
              rgba(8,83,156, 0.75)),url('pexels-photo-919278.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size:cover;
  
}
nav {
  position: fixed;
  top: 0;
  left: 0;
  height: 70px;
  width: 100%;
  display: flex;
  align-items: center;
  background: #fff;
  box-shadow: 0 0 1px rgba(0, 0, 0, 0.1);
  z-index: 2;
}
nav .logo {
  display: flex;
  align-items: center;
  margin: 0 24px;
}
.logo .menu-icon {
  color: #333;
  font-size: 24px;
  margin-right: 14px;
  cursor: pointer;
}
.logo .logo-name {
  color: #333;
  font-size: 22px;
  font-weight: 500;
  margin-left: 100px;
}
nav .sidebar {
  position: fixed;
  top: 0;
  left: -100%;
  height: 100%;
  width: 260px;
  padding: 20px 0;
  background-color: #fff;
  box-shadow: 0 5px 1px rgba(0, 0, 0, 0.1);
  transition: all 0.4s ease;
}
nav.open .sidebar {
  left: 0;
}
.sidebar .sidebar-content {
  display: flex;
  height: 100%;
  flex-direction: column;
  justify-content: space-between;
  padding: 30px 16px;
}
.sidebar-content .list {
  list-style: none;
}
.list .nav-link {
  display: flex;
  align-items: center;
  margin: 8px 0;
  padding: 14px 12px;
  border-radius: 8px;
  text-decoration: none;
}
.lists .nav-link:hover {
  background-color: #4070f4;
}
.nav-link .icon {
  margin-right: 14px;
  font-size: 20px;
  color: #707070;
}
.nav-link .link {
  font-size: 16px;
  color: #707070;
  font-weight: 400;
}
.lists .nav-link:hover .icon,
.lists .nav-link:hover .link {
  color: #fff;
}
.overlay {
  position: fixed;
  top: 0;
  left: -100%;
  height: 1000vh;
  width: 200%;
  opacity: 0;
  pointer-events: none;
  transition: all 0.4s ease;
  background: rgba(0, 0, 0, 0.3);
}
nav.open ~ .overlay {
  opacity: 1;
  left: 260px;
  pointer-events: auto;
}


/*  */


.container{
 	max-width: 1170px;
 	width: 100%;
 	margin:auto;
 }

 .home{
 	height: 100vh;
 	background-image: url("images/bg.jpg");
 	background-size: cover;
 	background-position: center;
 	display: flex;
 	flex-wrap: wrap;
 	padding:50px 15px;
 	position: relative;
 }
 .home::before{
 	content: '';
 	position: absolute;
 	left:0;
 	top:0;
 	width: 100%;
 	height: 100%;
 	background-color: rgba(0,0,0,0.8);
 	z-index: 1;
 }

 .home .home-text{
 	text-align: center;
 	position: relative;
 	z-index: 2;
 }

.home .home-text h1{
	color:#ffffff;
	font-size: 50px;
	color:#ffffff;
	line-height: 56px;
	font-weight: 700;
	margin:0 0 20px;
}
.home .home-text p{
	margin:0;
	overflow: hidden;
}
.home .home-text p span{
    font-size: 40px;
    color:#ff2c45;
    font-weight: 700;
    display: inline-block;
    line-height: 46px;
    display: none;
}

.home .home-text p span.text-in{
	display: block;
	animation: textIn .5s ease;
}
.home .home-text p span.text-out{
	animation: textOut .5s ease;
}
@keyframes textIn{
	0%{
		transform: translateY(100%);
	}
	100%{
		transform: translateY(0%);
	}
}
@keyframes textOut{
	0%{
		transform: translateY(0%);
	}
	100%{
		transform: translateY(-100%);

	}
}

</style>
</html>