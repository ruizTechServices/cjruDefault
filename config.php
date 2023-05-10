<?php
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
