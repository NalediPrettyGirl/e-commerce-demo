<?php include 'Connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SHOP&SLAY</title>
    <style>
       
    .my-divider {
      border: 1px solid #000; 
      margin: 10px 0; 
    }

    .my-card {
    margin: 10px;
    padding: 10px;
}

    </style>
</head>
<body>
<?php include 'nav.php'?>

<div class="container bg-light mt-5">
    <div class="jumbotron">
        <h4><a href="shopnow.php">Home</a>/kids</h4>
    </div>
</div>
</div>

<div class="container">
        <div class="row">
    <div class = "col-lg-12 col-md-12 col-sm-12 mt-5">
      <h4 class= "text-center">BUNDLE OF JOY</a></h4>
</div>
</div>
</div>
<div class="container">
          <div class ="row">
        
<?php 
        $sel_sql = "SELECT * FROM kids WHERE Item_id='1'";
        $run_sql = mysqli_query($conn, $sel_sql);

        while ($row = mysqli_fetch_assoc($run_sql)) {
    echo '<div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <div class="card text-center my-card">
        <br>
          <form method="post" action="to-cart-script.php">
              <img src="' . $row['Picture'] . '" style="width: 100%;">
              <h4>' . $row['Item_name'] . '</h4>
              <p class="price">R' . $row['Price'] . '</p>
              <p>' . $row['Description'] . '</p>
              <input type="hidden" name="Item_id" value="' . $row['Item_id'] . '">
              <input type="hidden" name="Item_name" value="' . $row['Item_name'] . '">
              <input type="hidden" name="Item_price" value="' . $row['Price'] . '">
              <input type="hidden" name="Description" value="' . $row['Description'] . '">
              <input type="hidden" name="Picture" value="' . $row['Picture'] . '">
              <input type="submit" name="Add_to_cart" class="btn btn-primary" value="Add To Cart">
          </form>
      <br>
        </div>
    </div>';
}
?>

<?php 
        $sel_sql = "SELECT * FROM kids WHERE Item_id='2'";
        $run_sql = mysqli_query($conn, $sel_sql);

        while ($row = mysqli_fetch_assoc($run_sql)) {
          echo '<div class="col-lg-4 col-md-6 col-sm-12 mt-5">
              <div class="card text-center my-card">
              <br>
              <form method="post" action="to-cart-script.php">
                  <img src="' . $row['Picture'] . '" style="width: 100%;">
                  <h4>' . $row['Item_name'] . '</h4>
                  <p class="price">R' . $row['Price'] . '</p>
                  <p>' . $row['Description'] . '</p>
                  <input type="hidden" name="Item_id" value="' . $row['Item_id'] . '">
                  <input type="hidden" name="Item_name" value="' . $row['Item_name'] . '">
                  <input type="hidden" name="Item_price" value="' . $row['Price'] . '">
                  <input type="hidden" name="Description" value="' . $row['Description'] . '">
                  <input type="hidden" name="Picture" value="' . $row['Picture'] . '">
                  <input type="submit" name="Add_to_cart" class="btn btn-primary" value="Add To Cart">
              </form>
          <br>
              </div>
          </div>';
      }
      ?>

<?php 
        $sel_sql = "SELECT * FROM kids WHERE Item_id='10'";
        $run_sql = mysqli_query($conn, $sel_sql);

        while ($row = mysqli_fetch_assoc($run_sql)) {
          echo '<div class="col-lg-4 col-md-6 col-sm-12 mt-5">
              <div class="card text-center my-card">
              <br>
              <form method="post" action="to-cart-script.php">
                  <img src="' . $row['Picture'] . '" style="width: 100%;">
                  <h4>' . $row['Item_name'] . '</h4>
                  <p class="price">R' . $row['Price'] . '</p>
                  <p>' . $row['Description'] . '</p>
                  <input type="hidden" name="Item_id" value="' . $row['Item_id'] . '">
                  <input type="hidden" name="Item_name" value="' . $row['Item_name'] . '">
                  <input type="hidden" name="Item_price" value="' . $row['Price'] . '">
                  <input type="hidden" name="Description" value="' . $row['Description'] . '">
                  <input type="hidden" name="Picture" value="' . $row['Picture'] . '">
                  <input type="submit" name="Add_to_cart" class="btn btn-primary" value="Add To Cart">
              </form>
          <br>
              </div>
          </div>';
      }
      ?>

<div class="container">
        <div class="row">
    <div class = "col-lg-12 col-md-12 col-sm-12 mt-5">
      <h4 class= "text-center">COOL KID WORLD WIDE</a></h4>
</div>
</div>
</div>
        <?php 
        $sel_sql = "SELECT * FROM kids";
        $run_sql = mysqli_query($conn, $sel_sql);

        while ($row = mysqli_fetch_assoc($run_sql)) {
          echo '<div class="col-lg-3 col-md-6 col-sm-12 mt-5">
              <div class="card text-center my-card">
              <br>
              <form method="post" action="to-cart-script.php">
                  <img src="' . $row['Picture'] . '" style="width: 70%;">
                  <h4>' . $row['Item_name'] . '</h4>
                  <p class="price">R' . $row['Price'] . '</p>
                  <p>' . $row['Description'] . '</p>
                  <input type="hidden" name="Item_id" value="' . $row['Item_id'] . '">
                  <input type="hidden" name="Item_name" value="' . $row['Item_name'] . '">
                  <input type="hidden" name="Item_price" value="' . $row['Price'] . '">
                  <input type="hidden" name="Description" value="' . $row['Description'] . '">
                  <input type="hidden" name="Picture" value="' . $row['Picture'] . '">
                  <input type="submit" name="Add_to_cart" class="btn btn-primary" value="Add To Cart">
              </form>
          <br>
              </div>
          </div>';
      }
      ?>
   
    </div>
    </div>
    <hr class="my-divider mt-5">
    <?php
include 'footer.php';
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>