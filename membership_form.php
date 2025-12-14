<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname  = htmlspecialchars($_POST["fullname"]);
    $email     = htmlspecialchars($_POST["email"]);
    $phone     = htmlspecialchars($_POST["phone"]);
    $interest  = htmlspecialchars($_POST["interest"]);
    $baptized  = htmlspecialchars($_POST["baptized"]);

    $to      = "yourchurch@email.com"; // Replace with your actual email
    $subject = "New Membership Request from $fullname";
    $body    = "Name: $fullname\nEmail: $email\nPhone: $phone\nBaptized: $baptized\n\nReason for Joining:\n$interest";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Thank you, $fullname. Your membership request has been received. We’ll be in touch soon!</h2>";
    } else {
        echo "<h2>Sorry, there was an error submitting your request. Please try again later.</h2>";
    }
}
?>
