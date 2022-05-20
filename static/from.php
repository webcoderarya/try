<?php
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$massage = $_POST['massage'];

$email_from = 'info@annuplacement.com';

$email_subject = "New Candidate Equary";


$email_body = "User Name: $name.\n".
"User Email: $email.\n".
"User Mobile: $mobile.\n".
"User Massage: $massage.\n";


$to = "annuplacementoffical@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers) or die("Error");

echo("massage send");

header("Location: index.html");

?>

