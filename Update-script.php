<?php
// Mens

if (isset($_POST['Update_men']))
 {
    $item_id = $_POST['Item_id'];
    $newItemName = $_POST['newItemName'];
    $newItemPrice = $_POST['newItemPrice'];
    $newDescription = $_POST['newDescription'];

    $username = "root";
    $dbname = "shopslay";

    try {
        $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $update_sql = "UPDATE men SET Item_name = :newItemName, Price = :newItemPrice, Description = :newDescription WHERE Item_id = :item_id";
        $stmt = $conn->prepare($update_sql);
        $stmt->bindParam(':newItemName', $newItemName);
        $stmt->bindParam(':newItemPrice', $newItemPrice);
        $stmt->bindParam(':newDescription', $newDescription);
        $stmt->bindParam(':item_id', $item_id);
        $stmt->execute();

        header('Location: AdminMen.php');
        exit();
    } catch (PDOException $e) {
        error_log("Database error: " . $e->getMessage());
        echo "An error occurred while updating the item. Please try again later.";
    }

    $conn = null;
} 

// kids

if(isset($_POST['Update_kids'])) {
    $item_id = $_POST['Item_id'];
    $newItemName = $_POST['newItemName'];
    $newItemPrice = $_POST['newItemPrice'];
    $newDescription = $_POST['newDescription'];

    $username = "root";
    $dbname = "shopslay";

    try {
        $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $update_sql = "UPDATE kids SET Item_name = :newItemName, Price = :newItemPrice, Description = :newDescription WHERE Item_id = :item_id";
        $stmt = $conn->prepare($update_sql);
        $stmt->bindParam(':newItemName', $newItemName);
        $stmt->bindParam(':newItemPrice', $newItemPrice);
        $stmt->bindParam(':newDescription', $newDescription);
        $stmt->bindParam(':item_id', $item_id);
        $stmt->execute();

        header('Location: AdminKids.php');
        exit();
    } catch (PDOException $e) {
        error_log("Database error: " . $e->getMessage());
        echo "An error occurred while updating the item. Please try again later.";
    }

    $conn = null;
} 

// Women
if (isset($_POST['Update_women'])) {
    $item_id = $_POST['Item_id'];
    $newItemName = $_POST['newItemName'];
    $newItemPrice = $_POST['newItemPrice'];
    $newDescription = $_POST['newDescription'];

    $username = "root";
    $dbname = "shopslay";

    try {
        $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $update_sql = "UPDATE women SET Item_name = :newItemName, Price = :newItemPrice, Description = :newDescription WHERE Item_id = :item_id";
        $stmt = $conn->prepare($update_sql);
        $stmt->bindParam(':newItemName', $newItemName);
        $stmt->bindParam(':newItemPrice', $newItemPrice);
        $stmt->bindParam(':newDescription', $newDescription);
        $stmt->bindParam(':item_id', $item_id);
        $stmt->execute();

        header('Location: AdminWomen.php');
        exit();
    } catch (PDOException $e) {
        error_log("Database error: " . $e->getMessage());
        echo "An error occurred while updating the item. Please try again later.";
    }

    $conn = null;
} 

else
 {
    echo "Invalid request.";
}

?>
