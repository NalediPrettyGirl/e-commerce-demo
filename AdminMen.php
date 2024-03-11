<?php include 'Connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SHOP&SLAY</title>

</head>

    <body>
       <?php include 'admin_nav.php'?> 

       <div class="container">
          <div class ="row">
          

<?php
$sel_sql = "SELECT * FROM men";
$run_sql = mysqli_query($conn, $sel_sql);

while ($row = mysqli_fetch_assoc($run_sql)) {
    echo '
    <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
        <div class="card text-center my-card">
        <br>
        <form method="post" action="Editmen.php">
            <img src="' . $row['Picture'] . '" style="width: 70%;">
            <h4>' . $row['Item_name'] . '</h4>
            <p class="price">R' . $row['Price'] . '</p>
            <p>' . $row['Description'] . '</p>
            <input type="hidden" name="Item_id" value="' . $row['Item_id'] . '">
            <input type="hidden" name="Item_name" value="' . $row['Item_name'] . '">
            <input type="hidden" name="Item_price" value="' . $row['Price'] . '">
            <input type="hidden" name="Description" value="' . $row['Description'] . '">
            <input type="hidden" name="Picture" value="' . $row['Picture'] . '">
            <input type="submit" name="Edit" class="btn btn-outline-warning" value="Edit"><br><br>
            <a href="AdminDelete1-script.php?delete_item_id=' . $row['Item_id'] . '" class="btn btn-outline-danger">Delete</a>
        </form>
    <br>
        </div>
    </div>';
}
?>
<div class="container">
        <div class="row">
    <div class = "col-lg-12 col-md-12 col-sm-12 mt-5">
      <h4 class= "text-center">ADD ITEMS</a></h4>
</div>
</div>
</div>

<div class="container my-4">
    <form method="post" action="addItemScript.php">
        <div class="form-group">
            <label for="item_name">Item Name:</label>
            <input type="text" class="form-control" id="item_name" name="item_name" required>
        </div>
        <div class="form-group">
            <label for="item_price">Item Price:</label>
            <input type="text" class="form-control" id="item_price" name="item_price" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="picture">Picture URL:</label>
            <input type="text" class="form-control" id="picture" name="picture" required>
        </div>
        <button type="submit" name ="Add_Men"class="btn btn-outline-danger">Add Item</button>
    </form>
</div>

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>