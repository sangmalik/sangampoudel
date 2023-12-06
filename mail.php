<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "sangampaudel530@gmail.com";  // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    
    // You can add additional logic or redirects here after processing the form
    
    header("Location: thank-you.html");  // Redirect to a thank-you page
    exit();
}
?>
