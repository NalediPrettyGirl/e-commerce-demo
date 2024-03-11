<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"])) {
      
        $email = $_POST["email"];
        $name = $_POST["name"];
        $message = $_POST["message"];

        $username = "root";
        $dbname = "shopslay";

        try {
            $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO contact (name, email, message) VALUES (:name, :email, :message)";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);

            $stmt->execute();
            echo "<script>alert('Thank you for your Message Form. We will be in touch shortly.');</script>";
        } catch (PDOException $e) {
            echo "There was an error saving your Message Form to the database: " . $e->getMessage();
        }

        $conn = null;k
    } 

    }  else {
    echo "Form not submitted.";
}

?>