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

</style>
</head>

    <body>
       <?php include 'nav.php'?> 

<div class="container bg-light ">
    <div class="jumbotron">
        <h4><a href="shopnow.php">Home</a>/<i>MyCart</i></h4>
    </div>
</div>
<div class="container">
<div class = "row">
    
<div class="card text-center my-card col-lg-8 col-md-8">

    <?php
    $sel_sql = "SELECT * FROM shopping_cart";
    $run_sql = mysqli_query($conn, $sel_sql);

    while ($row = mysqli_fetch_assoc($run_sql)) {
        echo '
 <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div>
                    <img src="' . $row['Picture'] . '"
                        class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                </div>
                <div class="ms-3">
                    <h5>' . $row['Item_name'] . '</h5>
                    <p class="small mb-0">' . $row['Description'] . '</p>
                </div>
                <div style="width: 80px;">
                    <h5 class="mb-0">R' . $row['Item_price'] . '</h5>
                </div>
                <a href="Delete-cart-script.php?delete_item_id=' . $row['Item_id'] . '" style="color: #cecece";><i class="fas fa-trash-alt"></i></a>
            </div>
        </div>
    </div>'
;
    }
    ?> 
     
</div>

			 <div class="col-lg-4">
    <div class="container mt-5">
      <h4>Cart
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <?php
          $sel_sql = "SELECT COUNT(*) FROM shopping_cart";
          $run_sql = mysqli_query($conn,$sel_sql);
          $row= mysqli_fetch_assoc($run_sql);
          echo'
          <b>'.$row['COUNT(*)'].'</b>'
          ?>
        </span>
      </h4>
      <hr>

      <?php
         $sel_sql = "SELECT SUM(Item_price) FROM shopping_cart ";
        $run_sql = mysqli_query($conn, $sel_sql);
        $row = mysqli_fetch_assoc($run_sql);
       echo'
       <p class="price">R '.$row['SUM(Item_price)'].' </p>'
    ?>
<hr>
<h4><b> Proceed to Billing</b></h4>
<a href="Checkout.php"><button type="button" class="btn btn-outline-dark">CHECKOUT<i class="fa-solid fa-arrow-right"></i></button></a>
</div>
	 </div>

<div class="row">
    <div class="container mt-5">
        <div class="col-lg-12">
            <h4><b>WHAT YOU MIGHT LIKE</b></h4>
        </div>
    </div>
</div>

<div class="container">
          <div class ="row">
        
<?php 
        $sel_sql = "SELECT * FROM women WHERE Item_name='PinkCoat'";
        $run_sql = mysqli_query($conn, $sel_sql);

        while ($row = mysqli_fetch_assoc($run_sql)) {
            echo '<div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                <div class="card text-center my-card">
                <br>
                    <form method="post" action="to-cart-script.php" >
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
        
        
        <?php 
        $sel_sql = "SELECT * FROM kids WHERE Item_id='3'";
        $run_sql = mysqli_query($conn, $sel_sql);

        while ($row = mysqli_fetch_assoc($run_sql)) {
            echo '<div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                <div class="card text-center my-card">
                <br>
                    <form method="post" action="to-cart-script.php" >
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
        
       
         <?php 
        $sel_sql = "SELECT * FROM women WHERE Item_id='9'";
        $run_sql = mysqli_query($conn, $sel_sql);

        while ($row = mysqli_fetch_assoc($run_sql)) {
            echo '<div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                <div class="card text-center my-card">
                <br>
                    <form method="post" action="to-cart-script.php" >
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
        
      
         <?php 
        $sel_sql = "SELECT * FROM men WHERE Item_id='2'";
        $run_sql = mysqli_query($conn, $sel_sql);

        while ($row = mysqli_fetch_assoc($run_sql)) {
            echo '<div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                <div class="card text-center my-card">
                <br>
                        <form method="post" action="to-cart-script.php" >
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
      </div>
      <?php
include 'footer.php';
?>
                        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
