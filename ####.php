<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $item_description = $_POST['item_description'];
    $item_picture = $_POST['item_picture'];

    $username = "root";
    $password = "";
    $dbname = "shopslay";

    try {
        $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $insertSql = "INSERT INTO kids (Item_name, Price, Description, Picture) VALUES (:item_name, :item_price, :item_description, :item_picture)";
        $insertStmt = $conn->prepare($insertSql);
        $insertStmt->bindParam(':item_name', $item_name);
        $insertStmt->bindParam(':item_price', $item_price);
        $insertStmt->bindParam(':item_description', $item_description);
        $insertStmt->bindParam(':item_picture', $item_picture);
        $insertStmt->execute();

        echo "Item has been added to the 'kids' table.";

    } catch (PDOException $e) {
        echo "There was an error: " . $e->getMessage();
    }

    $conn = null;
} else {
    echo "Invalid request or missing data.";
}
?>
