<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>To display Teachers Present</h1>
</body>
</html>


<?php 

$server="localhost";
$username="root";
$password="";
$database="kabarak_db";
$connection=mysqli_connect($server,$username,$password);
$select_db=mysqli_select_db($connection,$database);
if(!$select_db){
    echo ("connection terminated");
}

?>