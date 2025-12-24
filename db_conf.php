<?php
$servername = "localhost";
$username = "root"; // Default for local XAMPP/WAMP
$password = "";     // Default for local XAMPP/WAMP
$dbname = "college_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>