<?php include 'Connection.php'
?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
       
       .navbar {
           background-color: #000;}
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

 
<li class="nav-item">
        <a class="nav-link position-relative" href="ToCart.php"><i class="fa-solid fa-cart-shopping"></i>
        <span class=" top-0 start-100 translate-middle badge rounded-pill bg-primary">
   
    <?php
          $sel_sql = "SELECT COUNT(*) FROM shopping_cart";
          $run_sql = mysqli_query($conn,$sel_sql);
          $row= mysqli_fetch_assoc($run_sql);
          echo'
          <b>'.$row['COUNT(*)'].'</b>'

          
          ?>
  </span>
      </a>
      </li>
      </li>
   
      <li class="nav-item">
        <a class="nav-link" href="contact.php"><i class="fa-solid fa-message"></i></a>
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
      