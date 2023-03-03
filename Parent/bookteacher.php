<?php
session_start();
  $db=mysqli_connect('localhost','root','','tuition_db');
?>
<?php  
$id=$_GET['id'];
$sql="SELECT fullname,gender,contact,email FROM add_biography WHERE id=$id LIMIT 1";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($result);
?>
<?php
//end of Sending
if(isset($_POST['submit'])){
  $db= mysqli_connect("localhost","root","","tuition_db");
		$fullname=$_POST['fullname'];
		$gender=$_POST['gender'];
		$contact=$_POST['contact'];
		$fromdate=$_POST['fromdate'];
        $todate=$_POST['todate'];
        $email=$_POST['email'];
        $sql="SELECT email FROM booked_db WHERE id=$id LIMIT 1";
        $result=mysqli_query($db,$sql);
        $confirm=mysqli_fetch_assoc($result);
        if($confirm>0){
            $_SESSION['status']="Teacher booked";
        
            
        }
        else{
            $entering = "INSERT INTO booked_db (fullname, gender, phone,fromdate,todate,email) VALUES ('$fullname','$gender','$contact','$fromdate','$todate','$email') ";
            // echo'<div class="alert alert-warning" role="alert">
            // This is a warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            // </div>';
                if (mysqli_query($db, $entering)) {
                    $_SESSION['status']="Booked successful ";
                    
            // header( "Refresh:2; url=booking.php?msg= You have sent to teacher  succesfully");
                //header( "Refresh:3; url=cover.php");
            }else{
                echo mysqli_error($db);
            }

        }
	
      
    }
?>
<!-- retriving data to add to the Database -->
<?php  
// $id=$_GET['id'];
// $sql="SELECT *FROM booked_db WHERE id=$id LIMIT 1";
// $result=mysqli_query($db,$sql);
// $row=mysqli_fetch_assoc($result);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Are you ready to Book</h1>
    <p class="popup">
   
    </p>
    <form action="" method="post">
	<div class="sucontainer">
	<div class="split left">
  <div class="centered">
  <label><b>Name:</b></label><br>
  <?php
if(isset($_SESSION['status'])){
    ?>
   


   
   <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>You have booked successfully! <a href="parentAcccount.php"></a></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php
    // unset($_SESSION['status']);
}
?>
		<input type="text" placeholder="Enter Full Name" name="fullname" required value="<?php echo $row['fullname']?>"><br>
		<label><b>Gender</b></label><br>
		<input type="radio" name="gender" required value="female"<?php echo( $row['gender']=='female')?"checked":"";?>>Female
		<input type="radio" name="gender" required value="male"<?php echo( $row['gender']=='male')?"checked":"";?>>Male
		<input type="radio" name="gender" value="other"<?php echo( $row['gender']=='other')?"checked":"";?>>Other<br><br>
		
		<label><b>Contact No:</b></label><br>
		<input type="text" placeholder="Contact Number" name="contact" required maxlength="10" minlength="10"value="<?php echo $row['contact']?>"><br>
  </div>
</div>
<div class="split right">
  
  <div class="centered">
  	<br>
		<label><b>From Date:</b></label><br>
		<input type="date" placeholder="Enter Date" name="fromdate" id="p1" required><br>
		<label><b>To Date:</b></label><br>
		<input type="date" placeholder="Enter Date" name="todate" id="p1" required><br>
        <label><b>Email Address:</b></label><br>
		<input type="email" name="email"value="<?php echo $row['email']?>" id="">
		<div class="container" style="background-color:grey">
			<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
            <a href="../Home/index.php" style="color:blue";>HOME</a>
			<button type="submit" name="submit" style="float:right">submit</button>
  </div>
</div>
		</div>
  </div>

</form>

</body>
<style>
.popup{
    color:red;
}
body, html {
	
     background: url("https://st2.depositphotos.com/1579454/6699/i/950/depositphotos_66997573-stock-photo-online-booking-concept.jpg") no-repeat center; */
      height: 100%;
      margin: 0;
      background-position: 0 7px;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    
  }
  h1{
      text-align:center;
      color:black;
      font-size:40px;
      top:30%;
  }
  a{
      font-size: 18px;
      color: white;
      text-decoration: none;
  }
  strong{
      color: white;
      font-size: 30px;
      font-family: verdana;
  }
  label{
      color:white;

  }
  ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
  }
  li {
      float: right;
      border-right:3px solid #bbb;
  }
  li a {
      display: block;
      color: white;
      text-align: center;
      padding: 25px;
      text-decoration: none;
  }
  li a:hover:not(.active) {
      background-color: #111;
      opacity: 0.6;
  }
  .active {
      background-color: #e0e0d1;
  }
  /* Full-width input fields */
  input[type=text], input[type=password], input[type=email] ,input[type=date], input[type=number]  {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      outline: none;
  }
  input[type=submit]
  {
      border-radius:12px;
      background-color: black;
      border: none;
      color: white;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
  }
  option{
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
  }
  button {
      border-radius:12px;
      background-color: black;
      border: none;
      color: white;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
      cursor: pointer;
  }
  
  button:hover {
      opacity: 0.8;
  }
  
  /* Extra styles for the cancel button */
  .cancelbtn {
      border-radius:12px;
      background-color: red;
      border: none;
      color: white;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
      cursor: pointer;
  }
  .signupbtn{
      border-radius:12px;
      background-color: green;
      border: none;
      color: white;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
      cursor: pointer;
  }
  
  .loginbtn{
      position:absolute;
      top:50%;
      left:50%;
  }
  /* Center the image and position the close button */
  .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
  }
  
  img.avatar {
      width: 90%;
      border-radius:12px;
  }
  
  .container {
      padding: 16px;
  }
  .sucontainer{
      padding: 12px;
      position:absolute;
      left:30%;
      right:30%;
      top:12%;
      border:2px solid white;
      border-collapse:collapse;
      background:grey;
  }
  .dispcontainer{
      padding: 12px;
      position:bottom;
      left:30%;
      right:30%;
      bottom:5%;
      top:12%;
      border:2px solid white;
      border-collapse:collapse;
      background-repeat:no-repeat;
      background-attachment:fixed;
      background-size:cover
  }
  span.psw {
      float: right;
      padding-top: 16px;
  }
  
  /* The Modal (background) */
  .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      padding-top: 60px;
  }
  
  /* Modal Content/Box */
  .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 35%; /* Could be more or less, depending on screen size */
  }
  /* The Close Button (x) */
  .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
  }
  .close:hover,
  .close:focus {
      color: red;
      cursor: pointer;
  }
   #map {
          height: 100%;
        }
  /* Add Zoom Animation */
  .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
  }
  
  @-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)} 
      to {-webkit-transform: scale(1)}
  }
      
  @keyframes animatezoom {
      from {transform: scale(0)} 
      to {transform: scale(1)}
  }
  
  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 350px) {
      span.dont{
          display: block;
         float: right;
      }
      .cancelbtn {
         width: 100%;
      }
  }
  .mySlides {display:none}
  
  /* Slideshow container */
  .slideshow-container {
      max-width: 45%;
      max-height:100%;
      position: relative;
      margin: auto;
  }
  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }
  
  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }
  
  /* The dots/bullets/indicators */
  .dot {
    height: 13px;
    width: 13px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
  
  .active {
    background-color: #717171;
  }
  
  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }
  @-webkit-keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  
  @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  
  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .text {font-size: 11px}
  }
  </style>
</html>