<?php
// Replace these with your own Hostinger database credentials
$servername = "localhost";
$username = "u425772716_ruiztechservic";
$password = "Athenarubyvargas1!";
$dbname = "u425772716_cjru";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Hash the password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert data into the 'users' table
$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashed_password', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New user created successfully. <a href='login.html'>Log in</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
