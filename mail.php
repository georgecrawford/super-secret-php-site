<?php

$headers = "From: Dev Me <team@example.com>\r\n";
$headers .= "Reply-To: Help <help@example.com>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;\r\n";

$to_email = 'george@george.com';
$subject = 'Could this possibly work?';
$hash = urlencode('987340 < 982374098173 (*!@&$(*&£$&£$£( 48374');
$message = "<p>Thanks for signing up!</p><p>Please <a href=\"http://scotchbox/secret-site/verify.php?hash=$hash\">click this link</a> to verify your account.</p>";

mail($to_email, $subject, $message, $headers);

echo 'Mail sent! Take a look at <a href="http://scotchbox:8025">MailHog</a>';