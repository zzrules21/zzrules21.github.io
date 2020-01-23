<?php

    $name = $_POST("name");
    $email_from = $_POST("email");
    $phone = $_POST("phone");
    $contact = $_POST("contact");
    $quote = $_POST("quote");

    $email_to = "zjbzscores@gmail.com";
    $email_subject = "Request for Information";

    $email_message = "Name: " . $name . "\n";
    $email_message .= "Email: " . $email_from . "\n";
    $email_message .= "Phone Number: " . $phone . "\n";
    $email_message .= "Preferred Contact: " . $contact . "\n";
    $email_message .= "Message: " . $quote;

    $headers = 'From: ' . $email_from . "\r\n" .
        'Reply-To: ' . $email_from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($email_to, $email_subject, $email_message, $headers);

?>