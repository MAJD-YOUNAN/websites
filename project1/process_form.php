<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "majd2000younan@gmail.com";

    // Set email subject
    $subject = "Contact Form Submission from $name";

    // Compose the email message
    $message = "Name: $name\nEmail: $email\n\n$message";

    // Set additional headers
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $message, $headers);

    // Redirect back to the contact page or a thank-you page
    header("Location: bedankt.html"); // Create this page
    exit();
}
?>