<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Edit_kids'])) {
  
    $item_id = $_POST['Item_id'];
    $item_name = $_POST['Item_name'];
    $item_price = $_POST['Item_price'];
    $description = $_POST['Description'];
    $picture = $_POST['Picture'];

   ?>
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
       <?php include 'admin_nav.php';?> 

       <div class="container">
        <div class="row">
    <div class = "col-lg-12 col-md-12 col-sm-12 mt-5">
      <h4 class= "text-center">Edit ITEMS</a></h4>
</div>
</div>
</div>

   <?php
    echo '
    <div class="container my-4">
    <form method="post" action="Update-script.php">
        <input type="hidden" name="Item_id" value="' . $item_id . '">
        <div class="form-group">
            <label for="newItemName">New Item Name:</label>
            <input type="text" class="form-control" id="newItemName" name="newItemName" value="' . $item_name . '">
        </div>
        <div class="form-group">
            <label for="newItemPrice">New Item Price:</label>
            <input type="text" class="form-control" id="newItemPrice" name="newItemPrice" value="' . $item_price . '">
        </div>
        <div class="form-group">
            <label for="newDescription">New Description:</label>
            <textarea class="form-control" id="newDescription" name="newDescription">' . $description . '</textarea>
        </div>
        <input type="submit" name="Update_kids" class="btn btn-warning" value="Update">
    </form>
    </div>';
} ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>