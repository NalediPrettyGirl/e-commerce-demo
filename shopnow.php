<?php
include 'Connection.php'; 
if(isset($_SESSION['name']) && isset($_SESSION['password'])==true){
    $sel_sql = "SELECT * FROM user WHERE Username ='$_SESSION[name]'AND Password ='$_SESSION[password]'";
    if($run_sql = mysqli_query($conn, $sel_sql)){
        if(mysqli_num_rows($run_sql)==1){ } else{ header(Location:'index.html');}
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
       
        .main {
  padding-top: 3rem;
  padding-bottom: 2rem;
}
.widget-wrapper {
  padding-bottom: 2rem;
  border-bottom: 1px solid #e0e0e0;
  margin-bottom: 2rem;
}



</style>
    <title>Categories</title>
</head>
<body>

<?php include 'nav.php'?>
 
<main>

  <!--Main layout-->
  <div class="container bg-light mt-1">
    <div class="jumbotron">
        <h4>Home</h4>
    </div>
</div>

<div class="container">
        <div class="row">
    <div class = "col-lg-12 col-md-12 col-sm-12 mt-5">
      <h4 class= "text-center">TOP RECOMMENDED</a></h4>
</div>
</div>
</div><!--Recommended-->
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


      
    
        <div class="container">
        <div class="row">
    <div class = "col-lg-12 col-md-12 col-sm-12 mt-5">
      <h4 class= "text-center" id="feature">FEATURES</a></h4>
</div>
</div>
</div>
 <!--featured Carousel Wrapper--> 

 <div class="col-lg-12 wow fadeIn mt-5 " data-wow-delay="0.2s">
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                          <video width="100%" height="100%" Autoplay><source src="coatmen.mp4"></video>
                        <div class="carousel-caption">
                            <h4>New collection</h4>
                            <br>
                        </div>
                    </div>
                    <!--/First slide-->
                    <!--Second slide-->
                     <div class="carousel-item">
                        <img src="wow.jpg" width="100%" height="80%" alt="Third slide">
                        <div class="carousel-caption">
                            <h4>Suit for Ladys and Men</h4>
                            <br>
                        </div>
                    </div>
                    <!--/Second slide-->
                    <!--Third slide-->
                    <div class="carousel-item">
                        <img src="suit11.jpg" width="100%" height="80%" alt="Third slide">
                        <div class="carousel-caption">
                            <h4>Nothing but Affordable</h4>
                            <br>
                        </div>
                    </div>
                    <!--/Third slide-->
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" ariahidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" ariahidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->
        </div>

<?php
include 'footer.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
