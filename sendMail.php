<?php
session_start();
$email = "info@gaurikmilk.com";
$sender_name = $_POST['name'];
$sender_email = $_POST['email'];
$sender_phone = $_POST['phone'];
$sender_message = $_POST['message'];

$sender_subject = "Gaurik Milk Website Mail";

$message = "From - $sender_email\nName - $sender_name\nPhone - $sender_phone\nMessage - $sender_message";

if (mail($email, $sender_subject, $message)) {
    $_SESSION['sent'] = true;
} else {
    $_SESSION['sent'] = false;
}
header('Location: contact.php');
