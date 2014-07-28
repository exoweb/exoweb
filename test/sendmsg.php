<?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// add validation here
// -- if validation passed send email
$message = $message."\r\n email: ".$email."\r\n telefon: ".$phone;
//$headers = 'From: '.$email;
//mail('masalpio@gmail.com', 'exoweb '.$name, $message, $headers);
mail('masalpio@gmail.com', 'exoweb '.$name, $message);
session_unset();
// -- else 
$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['phone'] = $phone;
$_SESSION['message'] = $message;

header( 'Location: ./mail-test.php' ) ;


?>
