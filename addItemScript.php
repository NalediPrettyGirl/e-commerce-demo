<?php include 'Connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST['Add_kids'])){

    $itemName = $_POST['item_name'];
    $itemPrice = $_POST['item_price'];
    $itemDescription = $_POST['description'];
    $itemPicture = $_POST['picture'];

    $username = "root";
        $dbname = "shopslay";
        try {
            $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $inssql = "INSERT INTO kids (Item_name, Price, Description, Picture) VALUES (:Item_name, :Price, :Description, :Picture)";
            $stmt = $conn->prepare($inssql);
            $stmt->bindParam(':Item_name', $itemName);
            $stmt->bindParam(':Price', $itemPrice);
            $stmt->bindParam(':Description', $itemDescription);
            $stmt->bindParam(':Picture', $itemPicture);
            $stmt->execute();
            echo "<script>alert('Item Added.');</script>";
        } catch (PDOException $e) {
            echo "There was an error saving your Item to the database: " . $e->getMessage();
        }

        $conn = null;
    } 
    
if(isset($_POST['Add_Men'])){

    $itemName = $_POST['item_name']; 
    $itemPrice = $_POST['item_price'];
    $itemDescription = $_POST['description'];
    $itemPicture = $_POST['picture'];

    $username = "root";
    $dbname = "shopslay";
    try {
        $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $inssql = "INSERT INTO men (Item_name, Price, Description, Picture) VALUES (:Item_name, :Price, :Description, :Picture)";
        $stmt = $conn->prepare($inssql);
        $stmt->bindParam(':Item_name', $itemName);
        $stmt->bindParam(':Price', $itemPrice);
        $stmt->bindParam(':Description', $itemDescription);
        $stmt->bindParam(':Picture', $itemPicture);
        $stmt->execute();
        echo "<script>alert('Item Added.');</script>";
    } catch (PDOException $e) {
        echo "There was an error saving your Item to the database: " . $e->getMessage();
    }

    $conn = null;
}


if(isset($_POST['Add_Women'])){

    $itemName = $_POST['item_name'];
    $itemPrice = $_POST['item_price'];
    $itemDescription = $_POST['description'];
    $itemPicture = $_POST['picture'];

    $username = "root";
        $dbname = "shopslay";
        try {
            $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $inssql = "INSERT INTO women (Item_name, Price, Description, Picture) VALUES (:Item_name, :Price, :Description, :Picture)";
            $stmt = $conn->prepare($inssql);
            $stmt->bindParam(':Item_name', $itemName);
            $stmt->bindParam(':Price', $itemPrice);
            $stmt->bindParam(':Description', $itemDescription);
            $stmt->bindParam(':Picture', $itemPicture);
            $stmt->execute();
            echo "<script>alert('Item Added.');</script>";
        } catch (PDOException $e) {
            echo "There was an error saving your Item to the database: " . $e->getMessage();
        }

        $conn = null;
} else {
    echo "Form not submitted.";
}
}
?>
