<?php $name = $_POST['name'];
echo $name;
$email =  $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent="Submitted Information: \n \n Name: \n $name \n \n Email: \n $email \n \n  Message: \n $message";
$recipient = "yourmail@domain.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
header('Location: /index.html');
exit;
?>
