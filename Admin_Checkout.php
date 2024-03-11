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
            background-image: url('Thanka.gif');
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
        <?php

// Assuming you already have a valid database connection $conn

              // Your SQL query with JOIN
              $sql = "SELECT users.User_id, users.Username, checkout_cart.Checkout_id, checkout_cart.Item_id, checkout_cart.Item_name
                      FROM users
                      JOIN checkout_cart ON users.User_id = checkout_cart.User_id";

              // Prepare and execute the query
              $stmt = $conn->prepare($sql);
              $stmt->execute();

              // Fetch the results
              $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

              ?>

              <!-- Display the results in HTML table -->
              <table class="table">
                  <thead>
                      <tr>
                          <th scope="col">User_id</th>
                          <th scope="col">Username</th>
                          <th scope="col">Checkout_id</th>
                          <th scope="col">Item_id</th>
                          <th scope="col">Item_name</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($results as $row): ?>
                          <tr>
                              <td><?php echo $row['User_id']; ?></td>
                              <td><?php echo $row['Username']; ?></td>
                              <td><?php echo $row['Checkout_id']; ?></td>
                              <td><?php echo $row['Item_id']; ?></td>
                              <td><?php echo $row['Item_name']; ?></td>
                          </tr>
                      <?php endforeach; ?>
                  </tbody>
              </table>

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>