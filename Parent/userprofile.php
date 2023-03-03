
<?php 
$db=mysqli_connect('localhost','root','','tuition_db');
session_start();
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
 <center>
<div class="header">
<h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;">Your History</h1>
 <nav>
    <div class="home">
    <a href="../Home/index.php">Home</a>
    <div class="dash"style="margin:40px;"><a href="parentAcccount.php">Dashboard</a></div>
</div>
 </nav>
 <table class="table-hover">
 <tr class="table-black">
 <p>Hey, <?php echo $_SESSION['username']; 
 $loggedUser=$_SESSION['username'];
?>!</p>
</div>
 

 <?php  
    if(isset($_GET['msg'])){
      $msg=$_GET['msg'];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">  
      '.$msg.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
 
    <th>id:</th>
    <th>Name:</th>
    <th>Email:</th>
 
    <th>Phone number</th>
    
    
</tr>
<?php

//
// "SELECT * FROM `reg_db` WHERE fname='$username'
//                      AND passwords='" . md5($password) . "'";
//
$i=1; 
$qry="SELECT * FROM `reg_db` WHERE fname='$loggedUser'";
$run=$db-> query($qry);
if($run->num_rows>0){
    while($row=$run->fetch_assoc()){
        $id=$row['fname'];
?>
<tr>
<td><?php echo $i++;   ?></td>

<td><?php echo $row['fname']  ?></td>
<td><?php echo $row['email']  ?></td>
<td><?php echo $row['phone']  ?></td>


<td>
</td>
</tr>

<?php }
}
?>
<?php 
?>
</table>
</center>

<?php

$loggedUser=$_SESSION['username'];

$qry="SELECT * FROM `reg_db` WHERE fname='$loggedUser'";
$run=$db-> query($qry);
if($run->num_rows>0){
    while($row=$run->fetch_assoc()){
        $id=$row['fname'];
?>
<center>
<table class="table-striped">
<div class="reschedule">
<tr>
<th style="align:left"class="thead-dark"><?php echo $row['fname']  ?></th>
</tr>
<tr>
    <td style="color:greenyellow"><p>Hello <?php echo $row['fname']  ?>  above are your personal details please dont disclose them to anyone</p></td>
    
</tr>

</td>
</tr>

</div>
</table>
</center>
<?php
    }
}
?>
<?php 

$qry="SELECT *from heap_sort";
?>


<style>
    body{
        background-color: orangered;
    }
    .header{
        background-color: darkred;
        width: 100%;
        height: 150px;
        padding: 20px;zzz
    }
    .table-hover{
        margin-top: 50px;
        width: 800px;
    }
    .home{
        float: left;
        margin: 20px;

    }
    .home a{
        text-decoration: none;
        font-size: 1.2rem;
    }
    .home a:hover{
        color: white;
        
    }
 

    .reschedule{
        color: red;
        margin-top: 200px;
    }
    table{
        width: 800px;
        height: 100px;
    }
    table td{
        padding: 5px;
    }
    table th{
        padding: 10px;
    }
</style>
</body>
</html>