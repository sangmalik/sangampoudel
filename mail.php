<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can customize the email content and recipient
    $to = "your.email@example.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $message, $headers);

    // Redirect to a thank-you page or display a success message
    header("Location: thank.html");
    exit();
}
