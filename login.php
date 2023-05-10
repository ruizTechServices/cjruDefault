<?php
session_start();
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Fetch the user record from the database
    $sql = "SELECT id, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user) {
            // Verify the provided password against the stored hashed password
            if (password_verify($password, $user['password'])) {
                // Password is correct
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;
                header("Location: dashboard.html");
            } else {
                // Password is incorrect
                echo "Invalid username or password";
            }
        } else {
            // User not found
            echo "Invalid username or password";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
