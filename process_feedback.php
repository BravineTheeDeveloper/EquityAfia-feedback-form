<?php
$to = 'sarahodini@gmailcom';
$subject = 'User Feedback';
$rating = $_POST['rating'];
$feedback = $_POST['feedback'];

$message = "Rating: $rating\n\nFeedback: $feedback";
$headers = "From: sarahodini@gmail.com"; // Replace with your email address

mail($to, $subject, $message, $headers);
?>