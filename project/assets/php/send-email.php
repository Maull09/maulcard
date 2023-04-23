<?php
if($_POST["message"]) {
    $recipient="maulanafirdaus63@gmail.com";
    $subject="Form Submission";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];
    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    echo "Thank you! Your message has been sent.";
}
?>
