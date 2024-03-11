<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["Add_to_cart"])) {
        // Check if the user is logged in
        if (isset($_SESSION['User_id'])) {
            $item_id = $_POST['Item_id'];
            $item_name = $_POST['Item_name'];
            $item_price = $_POST['Item_price'];
            $picture = $_POST['Picture'];
            $description = $_POST['Description'];
            
            $username = "root";
            $password = "";
            $dbname = "shopslay";

            try {
                $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                
                $user_id = $_SESSION['User_id'];

                $sql = "INSERT INTO shopping_cart (User_id, Item_id, Item_name, Item_price, Description, Picture) 
                        VALUES (:User_id, :Item_id, :Item_name, :Item_price, :Description, :Picture)";

                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':User_id', $user_id);
                $stmt->bindParam(':Item_id', $item_id);
                $stmt->bindParam(':Item_name', $item_name);
                $stmt->bindParam(':Item_price', $item_price);
                $stmt->bindParam(':Description', $description);
                $stmt->bindParam(':Picture', $picture);

                $stmt->execute();

                header('Location:ToCart.php');
                exit();
            } catch (PDOException $e) {
                echo "There was an error saving your data to the database: " . $e->getMessage();
            }

            $conn = null;
        } else {
            // Redirect to the login page if the user is not logged in
            header('Location: login.php');
            exit();
        }
    }
}
?>


