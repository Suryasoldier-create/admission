<?php
include 'db_conf.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $app_id = mysqli_real_escape_string($conn, $_POST['app_id']);
    $card_holder = mysqli_real_escape_string($conn, $_POST['holderName']);
    $amount = 2000.00; // Fixed registration fee

    $sql = "INSERT INTO payments (application_id, card_holder_name, amount_paid) 
            VALUES ('$app_id', '$card_holder', '$amount')";

    if ($conn->query($sql) === TRUE) {
        // Update admission status to 'Paid'
        $conn->query("UPDATE admissions SET application_status='Paid' WHERE application_id='$app_id'");
        
        echo "<script>alert('Payment Successful! Your admission is confirmed.'); window.location.href='college.html';</script>";
    } else {
        echo "Payment Error: " . $conn->error;
    }
}
$conn->close();
?>