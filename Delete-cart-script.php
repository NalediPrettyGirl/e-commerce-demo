<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["delete_item_id"])) {
    $delete_item_id = $_GET["delete_item_id"];
    
    $username = "root";
    $password = "";
    $dbname = "shopslay";

    try {
        $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $deleteSql = "DELETE FROM shopping_cart WHERE Item_id = :Item_id";
        $deleteStmt = $conn->prepare($deleteSql);
        $deleteStmt->bindParam(':Item_id', $delete_item_id);
        $deleteStmt->execute();

        header('Location:ToCart.php');
        exit();

    } catch (PDOException $e) {
        echo "There was an error: " . $e->getMessage();
    }

    $conn = null;
} else {
    echo "Invalid request or missing item ID.";
}
?>
