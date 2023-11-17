<?php
if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // You can perform actions with this data, such as sending an email
    // Example: Sending an email (requires a working mail server)
    $to = "your_email@example.com";
    $subject = "New Contact Form Submission";
    $mailContent = "Name: $name\nEmail: $email\nMessage: $message";

    // Use mail() function to send the email
    if (mail($to, $subject, $mailContent)) {
        echo "<p>Thank you for contacting us. We'll get back to you soon!</p>";
    } else {
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }
}
?>
