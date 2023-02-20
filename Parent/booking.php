<?php 
$server="localhost";
$username="root";
$password="";
$database="kabarak_db";
$conn=mysqli_connect($server,$username,$password);
$query=mysqli_select_db($conn,$database);
if(!$query){
    echo ("connection terminated");
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking a teacher</title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h1>To display Teachers Present</h1>
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Choose Teacher based on (Today's Date : <?php echo $todaysDate = date("m-d-Y");?>)</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">All Student in Class</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->


              <!-- Input Group -->
        <form method="post">
            <div class="row">
              <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 
                  <h6 class="m-0 font-weight-bold text-danger">Note: <i>Click on the checkboxes besides each teacher  to book</i></h6>
                </div>
                <div class="table-responsive p-3">
                <!-- <?php echo $statusMsg; ?> -->
                  <table class="table align-items-center table-flush table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        <th>FUll NAME</th>
                        <th>GENDER</th>
                        <th>CONTACT</th>
                        <th>Email</th>
                        <th>LEVEL OF STUDY</th>
                        <th>SKILLS</th>
                        <th>SUMMARY OF SUBJECTS</th>
                        <th>check here</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                    <!-- <td><input name='check[]' type='checkbox' value=".$rows['admissionNumber']." class='form-control'></td> -->
                    <!-- echo "<input name='admissionNo[]' value=".$rows['admissionNumber']." type='hidden' class='form-control'>"; -->
                  <?php
                      $query =" SELECT * FROM `add_biography`";
                      $run=$conn-> query($query);
                    
                      $sn=0;
                      $status="";
                      if(($run->num_rows>0))
                      { 
                        while ($rows = $run->fetch_assoc())
                          {
                             $sn = $sn + 1;
                            echo"
                              <tr>
                              <td>".$sn."</td>
                                <td>".$rows['fullname']."</td>
                                <td>".$rows['gender']."</td>
                                <td>".$rows['contact']."</td>
                                <td>".$rows['email']."</td>
                                <td>".$rows['levelofstudy']."</td>
                                <td>".$rows['skills']."</td>
                                <td>".$rows['texts']."</td>
                                <td><input name='check[]' type='checkbox' value=".$rows['fullname']." class='form-control'></td>
                                <td>  </td>
                                
                              </tr>";
                              echo "<input name='admissionNo[]' value=".$rows['fullname']." type='hidden' class='form-control'>";
                              
                          }
                      }
                      else
                      {
                           echo   
                           "<div class='alert alert-danger' role='alert'>
                            No not sent!
                            </div>";
                      }
                      
                      ?>
                    </tbody>
                  </table>
                  <br>
                  <button type="submit" name="save" class="btn btn-primary">Submit your Choice</button>
                  </form>
                </div>
              </div>
            </div>

</body>
<style>
    body{
        background-color: aqua;
    }
    h1{
        text-align: center;
    }
</style>
</html>


