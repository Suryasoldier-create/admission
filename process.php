<?php
$servername = "localhost";
$username = "root"; // Default for local servers
$password = "";     // Default for local servers
$dbname = "college_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if it's an admission submission
if (isset($_POST['cmdSUBMIT'])) {
    $name = $_POST['First_name'] . " " . $_POST['Last_name'];
    $father = $_POST['Father_First_name'];
    $email = $_POST['Email_Address'];
    $course = $_POST['cmbcourses'];
    
    $sql = "INSERT INTO admissions (student_name, father_name, email, course) 
            VALUES ('$name', '$father', '$email', '$course')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: credit.html"); // Redirect to payment after form
    } else {
        echo "Error: " . $conn->error;
    }
}

// Check if it's a payment submission
if (isset($_POST['process_payment'])) {
    $cardName = $_POST['holderName'];
    $cardNumber = $_POST['cardNumber'];
    
    $sql = "INSERT INTO payments (card_holder, card_number) VALUES ('$cardName', '$cardNumber')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Payment Successful and Record Saved!'); window.location.href='college.html';</script>";
    }
}

$conn->close();
?>