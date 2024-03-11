<?php
include 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sign_up'])) {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Conf_Password=$_POST['Conf_Password'];
    $Email=$_POST['Email'];


   
    if (!empty($Username) && !empty($Password) && $Password == $Conf_Password) {
        // Hash the password
        $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

        $username = "root";
        $dbname = "shopslay";

        try {
            $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // duplicate usernames 
            $existingUser = $conn->prepare("SELECT Username FROM user WHERE Username = :Username");
            $existingUser->bindParam(':Username', $Username);
            $existingUser->execute();
            if ($existingUser->fetch()) {
                echo "Username already exists. Please choose a different one.";

            } else {
                $inssql = "INSERT INTO user (Username, Email, Password) VALUES (:Username, :Email, :Password)";
                $stmt = $conn->prepare($inssql);
                $stmt->bindParam(':Username', $Username);
                $stmt->bindParam(':Password', $hashedPassword);
                $stmt->bindParam(':Email', $Email);
                $stmt->execute();
                
                header('Location: login.php');
                exit();
            }
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            echo "An error occurred during registration. Please try again later.";
        }

        $conn = null;
    } else {
        echo "Please provide a valid username or matching passwords.";
    }
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_login'])) {
    $Username = $_POST['name'];
    $Password = $_POST['password'];

    if (!empty($Username) && !empty($Password)) {
        $username = "root";
        $dbname = "shopslay";

        try {
            $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("SELECT User_id, Username, Password FROM user WHERE Username = :Username");
            $stmt->bindParam(':Username', $Username);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($Password, $user['Password'])) {
               
                $_SESSION['User_id'] = $user['User_id'];
                $_SESSION['Username'] = $user['Username'];

                
                header('Location: shopnow.php');
                exit();
            } else {
                echo "Invalid username or password. Please try again.";
            }
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            echo "An error occurred during login. Please try again later.";
        } finally {
            $conn = null;
        }
    } else {
        echo "Please provide a valid username and password.";
    }
}



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['admin_log'])) {
    $Username = $_POST['name'];
    $Password = $_POST['password'];

    if (!empty($Username) && !empty($Password)) {
        $username = "root";
        $dbname = "shopslay";

        try {
            $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("SELECT * FROM admin WHERE Username = :Username");
            $stmt->bindParam(':Username', $Username);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && $Password === $user['Password']) {
                $_SESSION['user'] = true;
                
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
}
?>
