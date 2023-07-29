<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $center_visited = $_POST["center-visited"];
    $date = $_POST["date"];
    $preference = $_POST["preference"];
    $reasons = $_POST["reasons"];
    $first_name = $_POST["first-name"];
    $email = $_POST["email"];
    $mobile_number = $_POST["number"];

    // Format the email content
    $to = "bravinebwire065@gmail.com";
    $subject = "Customer Feedback";
    $message = "Medical Center Visited: $center_visited\n";
    $message .= "Date: $date\n";
    $message .= "How likely are you to recommend us: $preference\n";
    $message .= "Reasons: $reasons\n";
    $message .= "First Name: $first_name\n";
    $message .= "Email: $email\n";
    $message .= "Mobile Number: $mobile_number\n";

    // Send the email
    if (mail($to, $subject, $message)) {
        echo "Thank you for your feedback!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
