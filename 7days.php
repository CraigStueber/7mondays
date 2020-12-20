<?php
$name = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phonenumber'];
$emailFrom = $_POST['email'];
$address = $_POST['address'];
$message = $_POST['message'];

$email_subject = 'New form submission';
$email_body = "User First Name : $name \n" .
    "User Last Name : $lname \n" .
    "User Email : $email \n" .
    "User Phone Number : $phone \n" .
    "Property Address : $address \n" .
    "Message: $message \n";

$to = "craigstueber@yahoo.com";
$headers = "From: " . $emailFrom;


mail($to, $email_subject, $email_body, $headers);

header("Location: index.html");
