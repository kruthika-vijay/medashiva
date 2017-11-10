
<?php $name = $_POST['name'];
  
$email =  $_POST['email'];
$mobile=$_POST['mobile'];
$message = $_POST['message'];
$formcontent="Submitted Information: \n \n Name: \n $name \n \n Email: \n $email \n \n Mobile:  \n $mobile \n \n Message: \n $message";
$recipient = "youremailhere";
$subject = "You've just received a new submission to your Contact Form.";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

echo "Thank You!";
header('Location: index.html');
exit;
?>

