<?php
// Establish database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "payment_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch card details from POST request
$cardNumber = $_POST['cardNumber'];
$expiryDate = $_POST['expiryDate'];
$cvv = $_POST['cvv'];

// Insert payment details into database
$sql = "INSERT INTO payments (card_number, expiry_date, cvv) VALUES ('$cardNumber', '$expiryDate', '$cvv')";

if ($conn->query($sql) === TRUE) {
  echo "Payment recorded successfully.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
