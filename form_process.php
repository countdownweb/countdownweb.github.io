<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = codeaimhdeveloping@gmail.com;
$subject = "New message";

mail($to, $subject, $message, "From: " . $first_name . $last_name);
echo "Your Message has been sent";




?>