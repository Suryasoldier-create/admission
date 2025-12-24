<?php
include 'db_conf.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $first_name = mysqli_real_escape_string($conn, $_POST['First_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['Last_name']);
    $full_name = $first_name . " " . $last_name;
    
    $email = mysqli_real_escape_string($conn, $_POST['Email_Address']);
    $course = mysqli_real_escape_string($conn, $_POST['cmbcourses']);
    $phone = mysqli_real_escape_string($conn, $_POST['Mobile_Number']);

    $sql = "INSERT INTO admissions (student_name, email, phone, course_name) 
            VALUES ('$full_name', '$email', '$phone', '$course')";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id; // Get the ID for the payment link
        // Redirect to payment page and pass the application ID
        header("Location: credit.html?app_id=" . $last_id);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>