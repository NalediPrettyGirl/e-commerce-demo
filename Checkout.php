<?php include 'Connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SHOP&SLAY</title>
</head>
<style>
    .row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; 
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; 
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; 
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #000;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #000;
}

span.price {
  float: right;
  color: #000;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
    <body>
       <?php include 'nav.php'?>
        <div class="row">
          <div class="container">
            
  <div class="col-75">
    <div class="container ms-5 mt-5 ">
      <form action="Checkout-script.php" method="post" >

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <div class="form-floating">
            <input type="text" id="fname" name="firstname" placeholder="Name">
            </div>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Email">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Address">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="City">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="State">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="Zip">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <!-- <label for="fname">Accepted Cards</label> -->
            <div class="icon-container">
                <!--add icons-->
             
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="AccountHolder Name">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="Card Number">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="expmonth">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="expyear">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="cvv">
              </div>
            </div>
          </div>

        </div>
        
        <input type="submit" value="Continue to checkout" class="btn" name = "Checkout">
      </form>
    </div>
  </div>
  
        </span>
      </h4>
      <hr>

     
  <div class="col-25">
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
      <p>Total <span class="price" style="color:black"><b></b></span></p>
      <?php
         $sel_sql = "SELECT SUM(Item_price) FROM shopping_cart ";
        $run_sql = mysqli_query($conn, $sel_sql);
        $row = mysqli_fetch_assoc($run_sql);
       echo'
       <p class="price">R '.$row['SUM(Item_price)'].' </p>'
    ?>
    </div>
  </div>
</div></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
