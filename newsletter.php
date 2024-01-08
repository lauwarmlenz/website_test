<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $firstName = $_POST['first-name'];

    // Validate email and other data if needed

    $to = 'kontakt@michael-fritsch.at'; // Your email address
    $subject = 'New Newsletter Signup';
    $message = "Email: $email\nFirst Name: $firstName";
    $headers = 'From: newsletter@johndoe.at' . "\r\n" .
               'Reply-To: newsletter@johndoe.at' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo '<p>Thank you for subscribing to the newsletter!</p>';
    } else {
        echo '<p>Sorry, there was an error subscribing to the newsletter. Please try again later.</p>';
    }
}
?>
