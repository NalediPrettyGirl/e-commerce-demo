<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Checkout"])) {
    $username = "root";
    $password = "";
    $dbname = "shopslay";

    try {
        $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Add the following line to check for connection errors
if (!$conn) {
    die("Connection failed: " . $conn->errorInfo());
}


        $user_id = $_SESSION['User_id'] ?? null;

        if ($user_id === null) {
            echo "User_id is not set in the session.";
            exit();
        }

        $firstname = $_POST["firstname"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $zip = $_POST["zip"];

        $cardname = $_POST["cardname"];
        $cardnumber = $_POST["cardnumber"];
        $expmonth = $_POST["expmonth"];
        $expyear = $_POST["expyear"];
        $cvv = $_POST["cvv"];

        $checkoutInfoSql = "INSERT INTO checkout (User_id, First_name, email, address, city, state, zip, card_name, card_number, expmonth, expYear, cvv)
                            VALUES (:User_id, :First_name, :email, :address, :city, :state, :zip, :card_name, :card_number, :expmonth, :expyear, :cvv)";
        $checkoutInfoStmt = $conn->prepare($checkoutInfoSql);
        $checkoutInfoStmt->bindParam(':User_id', $user_id);
        $checkoutInfoStmt->bindParam(':First_name', $firstname);
        $checkoutInfoStmt->bindParam(':email', $email);
        $checkoutInfoStmt->bindParam(':address', $address);
        $checkoutInfoStmt->bindParam(':city', $city);
        $checkoutInfoStmt->bindParam(':state', $state);
        $checkoutInfoStmt->bindParam(':zip', $zip);
        $checkoutInfoStmt->bindParam(':card_name', $cardname);
        $checkoutInfoStmt->bindParam(':card_number', $cardnumber);
        $checkoutInfoStmt->bindParam(':expmonth', $expmonth);
        $checkoutInfoStmt->bindParam(':expyear', $expyear);
        $checkoutInfoStmt->bindParam(':cvv', $cvv);
        $checkoutInfoStmt->execute();

        $checkoutId = $conn->lastInsertId();

        $checkoutSql = "INSERT INTO checkout_cart (Checkout_id, Item_id, Item_name, Item_price, Description, Picture) 
                        SELECT :Checkout_id, Item_id, Item_name, Item_price, Description, Picture
                        FROM shopping_cart";
        $checkoutStmt = $conn->prepare($checkoutSql);
        $checkoutStmt->bindParam(':Checkout_id', $checkoutId);
        $checkoutStmt->execute();

        $deleteSql = "DELETE FROM shopping_cart";
        $deleteStmt = $conn->prepare($deleteSql);
        $deleteStmt->execute();

        $_SESSION['checkoutDetails'] = [
            'firstname' => $firstname,
            'email' => $email,
            'address' => "$address, $city, $state $zip",
            'cardname' => $cardname,
            'cardnumber' => "**** **** **** " . substr($cardnumber, -4),
            'expdate' => "$expmonth/$expyear"
        ];

    } catch (PDOException $e) {
        echo "There was an error: " . $e->getMessage();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>SHOP&SLAY</title> 
</head>
<style>
       
       .navbar {
           background-color: #000;}

           body {
            background-image: url('wow.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
        
		   </style>
<header>

<nav class="navbar navbar-expand-lg navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">
    <strong>Shop&Slay</strong>
  </a>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav1">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="shopnow.php"><i class="fas fa-home"></i>
</a>
      </li>
   
      <li class="nav-item">
        <a class="nav-link" href="contact.php"><i class="fa-solid fa-message"></i></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link position-relative" href="ToCart.php"><i class="fa-solid fa-cart-shopping"></i>
      </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <a class="dropdown-item" href="Mens.php">Men</a>
          <a class="dropdown-item" href="Womens section.php">Women</a>
          <a class="dropdown-item" href="kids.php">Kids</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Logout.php">Log Out</i></a>
      </li>
	  
    </ul>
  </div>
</nav>
</header>
<body>
    

<div class="col-lg-12 text-center mt-5">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h6>Your Receipt</h6>
            </div>
            <div class="card-body">
                <?php
                $checkoutDetails = $_SESSION['checkoutDetails'] ?? null;

                if ($checkoutDetails) {
                    echo "<p>Name: {$checkoutDetails['firstname']}</p>
                        <p>Email: {$checkoutDetails['email']}</p>
                        <p>Address: {$checkoutDetails['address']}</p>
                        <p>Card: {$checkoutDetails['cardname']} {$checkoutDetails['cardnumber']}</p>
                        <p>Expiration Date: {$checkoutDetails['expdate']}</p>";
                }
                ?>

                <h6>Items:</h6>
                <ul>
                    <?php
                    $checkoutItemsSql = "SELECT Item_name, Item_price FROM checkout_cart WHERE Checkout_id = :Checkout_id";
                    $checkoutItemsStmt = $conn->prepare($checkoutItemsSql);
                    $checkoutItemsStmt->bindParam(':Checkout_id', $checkoutId, PDO::PARAM_INT);
                    $checkoutItemsStmt->execute();

                    $checkoutItems = $checkoutItemsStmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($checkoutItems as $item) {
                        echo "<li>" . $item['Item_name'] . " - R" . $item['Item_price'] . "</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script></body>
    </html>