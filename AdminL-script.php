<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['admin_log'])) {
    $Username = $_POST['name'];
    $Password = $_POST['password'];

    if (!empty($Username) && !empty($Password)) {
        $username = "root";
        $dbname = "shopslay";

        try {
            $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("SELECT * FROM user WHERE Username = :Username");
            $stmt->bindParam(':Username', $Username);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && $Password === $user['Password']) {
                header('Location: MyAdmin.php');
                exit();
            } else {
                echo "Invalid username or password. Please try again.";
            }
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            echo "An error occurred during login. Please try again later.";
        }

        $conn = null;
    } else {
        echo "Please provide a valid username and password.";
    }
?>


