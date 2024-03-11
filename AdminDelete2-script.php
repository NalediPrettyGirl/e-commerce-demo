<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["delete_item_id"])) {
    $delete_item_id = $_GET["delete_item_id"];
    
    $username = "root";
    $password = "";
    $dbname = "shopslay";

    try {
        $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $deleteSql = "DELETE FROM kids WHERE Item_id = :Item_id";
        $deleteStmt = $conn->prepare($deleteSql);
        $deleteStmt->bindParam(':Item_id', $delete_item_id);
        $deleteStmt->execute();

        echo "Item with ID $delete_item_id has been deleted from the Database.";

    } catch (PDOException $e) {
        echo "There was an error: " . $e->getMessage();
    }

    $conn = null;
}
?>