<?php

$frm_name  = "i-fashions website"; //your name
$recepient = "support@emovur.com"; //your e-mail
$sitename  = "i-fashions website"; //your site name
$subject   = "New contact from \"$sitename\""; //subject template

$name = trim($_POST["visitor_name"]);
$email = trim($_POST["visitor_email"]);
$msg = trim($_POST["visitor_msg"]);

$message = "
-------------------<br><br>
Visitor name: $name <br>
Visitor email: $email <br><br>
$msg
<br><br>-------------------
";

mail($recepient, $subject, $message, "From: $name <$recepient>" . "\r\n" . "Reply-To: $recepient" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");
?>
