<?php include 'Connection.php'
?>
<header>

<nav class="navbar navbar-dark bg-dark static-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="MyAdmin.html">SHOP&SLAY ADMIN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">My Office</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="MyAdmin.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Messages</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Catagories
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="AdminWomen.php">Woman</a></li>
              <li><a class="dropdown-item" href="AdminMen.php">Men</a></li>
              <li><a class="dropdown-item" href="AdminKids.php">Kids</a></li>
              <li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="LogoutAdmin.php">Log Out</a>
          </li>
        </ul>
        
      </div>
    </div>
  </div>
</nav>


      </header>