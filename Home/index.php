<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- Bootstrap 5 JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<!-- Font Awesome 4-->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header class="header">
    
        <p  class="logo"></p>
        <nav class="nav-items">
          <a href=""style="font-size:2rem;font-weight:bold;">Home</a>
          <a href="#"style="font-size:2rem;font-weight:bold;">About</a>
          <a href=" "style="font-size:2rem;font-weight:bold;">Contact</a>
        
          <a href="../Parent/parentAcccount.php"style="font-size:2rem;font-weight:bold;">Student</a>
          <a href="../Teacher/teacherB.php"style="font-size:2rem;font-weight:bold;">Teacher</a>
          <p id="demo"style="color:red;font-size:2rem;"></p>
          <p><a href=""><i class="fa fa-search"></i></a></p>
          
</nav>
        <script>
let myVar = setInterval(myTimer ,1000);
function myTimer() {
  const d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>
      </header>
      <main>
        <div class="intro">
          <h1>ONLINE TUITION' TEACHERS FINDER</h1>
          <p>ORDER OR BOOK A TEACHER ONLINE</p>
          <button ><span>Learn More About us</span></button>
        </div>
        <div class="achievements">
          <div class="work">
            <i class="fas fa-atom"></i>
            <p class="work-heading">Services</p>
            <p class="work-text">This website offers a platform where parent can interract with teacher just by booking him/her online to teach his /her children</p>
          </div>
          <div class="work">
            <i class="fas fa-skiing"></i>
           
    
          </div>
          <div class="work">
            <i class="fas fa-ethernet"></i>
            <p class="work-heading">Core Values</p>
              <ul>
                <li>Integrity</li>
                <li>Excellence & Professionalism</li>
                <li>Innovativeness & Creativity</li>
                <li>Commitment to serve</li>
              </ul>



          </div>
        </div>
        <div class="about-me">
          <div class="about-me-text">
            <h2 style="font-size: 1.2rem ;">About us</h2>
           
          </div>
           
        </div>
      </main>
      <footer class="footer">
      
       
          
            
          
          

        </div>
<div class="col-4">
  
  

  
</div>
      </footer>
      <style>
        .col-4{
          color:gold;
          display: block;
          
        }
        .col-4 p{
          font-size: 1.5rem;

        }
       
      
  #demo{
          font-family: 'Algerian';
  color: red;
  animation-name: example;
  animation-duration: 4s;
  animation-iteration-count: infinite;
}
.fa-solid fa-user-shield{
  background-color:black;
}
@keyframes example {
  0%   {color: red;}
  25%  {color: yellow;}
  50%  {color: blue;}
  100% {color: green;}
}
.intro p{
  animation-name: councel;
  padding: 20px;
  animation-duration: 4s;
  animation-iteration-count: infinite;
  transition: padding 50px,  transform 2s;;
}
@keyframes councel{
  0%   {color: red;}
  25%  {color: yellow;}
  50%  {color: blue;}
  100% {color: green;}
}
.intro button{
  padding: 10px 50px 10px 50px ;
}
.intro button{
  align-items: center;
 animation-duration: 4s;
  animation-name: butt;
  animation-iteration-count: infinite;
}
@keyframes butt{
  0%   {background-color: indigo;}
  
  25%  {background-color: blue;}
  50% {background-color: green;}
  75%{color: brown;}
  100%  {background-color: yellow;}
}
.col-4{
  font-size: 1rem;
  margin-right: 100px;
}
.nav-items{
  background-color: greenyellow;
  font-size: 1.5rem;
  
}
.header{
  background-color: greenyellow;
  font-size: 1.5rem;

}
.header nav a:hover{
  color: white;

}
.header nav p:hover{
  color: green;

}

.footer{
  background-color:#360f0f;
}
 .profile{
    margin-bottom: 30px;
    text-align: center;
}
.profile img{
    display: block;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin: 0 auto;
}
      </style>
</body>
</html>
