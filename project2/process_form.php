<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["vraag"];

    // Validation
    if (empty($name) || empty($email) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle validation errors (e.g., redirect back to the form with an error message)
        header("Location: contact.html?error=1");
        exit();
    }

    // Set the recipient email address
    $to = "majd2000younan@gmail.com";

    // Set email subject
    $subject = "Contact Form Submission from $name";

    // Compose the email message
    $message = "Name: $name\nEmail: $email\n\n$message";

    // Set additional headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
    // Redirect to a thank-you page
    header("Location: bedankt.html");
    exit();
} else {
    // Handle email sending failure
    header("Location: contact.html?error=2&message=Email%20sending%20failed");
    exit();
}

?>