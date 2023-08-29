<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $ticket = $_POST["ticket"];
    $message = $_POST["message"];

    $to = "codedsinger@gmail.com";
    $subject = "New Form Submission";
    $headers = "From:  $email";

    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone number: $phone\n";
    $email_body .= "Ticket number: $ticket\n";
    $email_body .= "Message: $message\n";

    if (mail($to, $subject, $email_body, $headers)) {
        echo "Thank you for your submission!";
    } else {
        echo "Oops, something went wrong. Please try again.";
    }
    }
}