<?php
$to      = 'pratamacloud@gmail.com';

$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: ' . strip_tags($_POST['email']) . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$retval = mail($to, $subject, $message, $headers);

if ($retval == true) {
  header('location : http://adipratama.com/');
}else {
  echo "Message could not be sent...";
}

 ?>
