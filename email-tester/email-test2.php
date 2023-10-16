<?php
 //$to = "steven.schafle@amtrustgroup.com";
$to = $_POST['to'];
$to_outlook = $_POST['outlook_email'];
$to_apple_email = $_POST['apple_mail'];
$message = $_POST['message'];

//$to="shelomith.chatmon@amtrustfinancial.com, rick.sans@amtrustgroup.com";
$subject = "HTML email";

//$message = '';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
//$headers .= 'From: <shel@shelinspires.com>' . "\r\n";

$headers .= 'From: Front End Team Emails' . "\r\n";

$send_to = $to;
$send_to. = 'feteam@yahoo.com';
$send_to. = 'feteam@gmail.com';
$send_to. = $to_outlook;
$send_to. = $to_apple_email;

mail($send_to,$subject,$message,$headers);
?>


