<?php
$name = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phonenumber'];
$emailFrom = $_POST['email'];
$address = $_POST['address'];
$zip = $_POST['zip'];
$message = $_POST['message'];

$email_subject = 'New form submission';
$email_body = "User First Name : $name \n" .
    "User Last Name : $lname \n" .
    "User Email : $emailFrom \n" .
    "User Phone Number : $phone \n" .
    "Property Address : $address \n" .
    "Zip Code : $zip \n" .
    "Message: $message \n";

$to = "craigstueber@yahoo.com";
$headers = "From: " . $emailFrom;


mail($to, $email_subject, $email_body, $headers);

header("Location: index.html");
