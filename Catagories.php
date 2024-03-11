<?php include 'Connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>SHOP&SLAY</title>
    <style>
        body {
            background-image: url('that.jpg');
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
            
<div class="col-lg-12 col-md-6 col-sm-12 ">
       <div class="card mt-5 text-center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">WOMEN</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
    <a href="AdminWomen.php" class="btn btn-outline-dark">View</a>
  </div>
</div></div>

<div class="col-lg-12 col-md-6 col-sm-12">
       <div class="card mt-5 text-center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">MEN</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
  
    <a href="AdminMen.php" class="btn btn-outline-dark">View</a>
       
  </div>
</div></div>

<div class="col-lg-12 col-md-6 col-sm-12">
       <div class="card mt-5 text-center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">KIDS</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
    <a href="AdminKids.php" class="btn btn-outline-dark">View</a>
  </div>
</div></div>

        </div></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>