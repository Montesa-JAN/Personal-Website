<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "audhy.montesa@gmail.com"; // Your email address
    $headers = "From: $name <$email>";
    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";

    mail($to, $subject, $email_body, $headers);
    echo "Your message has been sent successfully.";
} else {
    echo "Something went wrong. Please try again later.";
}
?>
