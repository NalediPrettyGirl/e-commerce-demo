<?php include 'Connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@6.0.0-beta3/css/all.min.css">

    <title>SHOP&SLAY</title>
    <style>
        body {
            background-image: url('hey.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;}

      </style>
</head>

    <body>
       <?php include 'admin_nav.php'?> 
       <div class="container">
          <div class ="row">
            
       <div class="col-lg-3 col-md-6 col-sm-12 ">
       <div class="card mt-5 text-center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">USERS</h5>
    <?php
          $sel_sql = "SELECT COUNT(*) FROM user";
          $run_sql = mysqli_query($conn,$sel_sql);
          $row= mysqli_fetch_assoc($run_sql);
          echo'
         
    <h6 class="card-subtitle mb-2 text-body-secondary">'.$row['COUNT(*)'].'</h6>
'?>
    <a href="UserTable.php" class="btn btn-outline-dark">Enter</a>
  </div>
</div></div>

<div class="col-lg-3 col-md-6 col-sm-12">
       <div class="card mt-5 text-center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">CATAGORY</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">3</h6>
    <a href="Catagories.php" class="btn btn-outline-dark">Enter</a>
  </div>
</div></div>

<div class="col-lg-3 col-md-6 col-sm-12">
       <div class="card mt-5 text-center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">MESSAGE</h5>
    <?php
          $sel_sql = "SELECT COUNT(*) FROM contact";
          $run_sql = mysqli_query($conn,$sel_sql);
          $row= mysqli_fetch_assoc($run_sql);
          echo'
         
    <h6 class="card-subtitle mb-2 text-body-secondary">'.$row['COUNT(*)'].'</h6>
'?>
    <a href="MessageTable.php" class="btn btn-outline-dark">Enter</a>
    
  </div>
</div></div>

<div class="col-lg-3 col-md-6 col-sm-12">
       <div class="card mt-5 text-center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">CHECKOUT</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">#</h6>

    <a href="Admin_Checkout" class="btn btn-outline-dark">Enter</a>
  </div>
</div></div>

</div></div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
