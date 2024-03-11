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
            background-image: url('R.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;}

      </style>
</head>
    <body>
       <?php include 'admin_nav.php'?> 
       <div class="row">
    <div class="container my-5 text-center">
        <div class="col-lg-11">
       <table class="table table-dark table-hover">
  <thead>
  
    <tr>
      <th scope="col">User_id</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
  <?php 
$sel_sql = "SELECT * FROM user";
$run_sql = mysqli_query($conn, $sel_sql);

while ($row = mysqli_fetch_assoc($run_sql)) { 
    echo'
    <tr>
      <th scope="row">' . $row['User_id'] . '</th>
      <td>' . $row['Username'] . '</td>
      <td>' . $row['Password'] . '</td>
    </tr>';}
    ?>
    
  </tbody>
</table>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>