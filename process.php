<?php
// Your secret key obtained from Cloudflare
$secretKey = '0x4AAAAAAANTaBDg0GijvKIA5n7tdqpQxCY';

// User response from the form
$userResponse = $_POST['g-recaptcha-response'];

// Verify the user's response
$response = file_get_contents("https://www.cloudflare.com/recaptcha/api/siteverify?secret={$secretKey}&response={$userResponse}");
$responseKeys = json_decode($response, true);

// Check if the reCAPTCHA was successful
if (intval($responseKeys["success"]) !== 1) {
    // The reCAPTCHA was not successful, handle accordingly (e.g., show an error)
    echo "reCAPTCHA verification failed";
} else {
    // The reCAPTCHA was successful, proceed with form processing

    // Example: Access form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example: Perform further actions like database operations, authentication, etc.
    // Process your form data here
    echo "Form submitted successfully. Username: {$username}, Password: {$password}";
}
?>
