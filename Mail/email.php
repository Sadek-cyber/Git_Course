<?php

$mailadd=$result;
$sub=$subject;
$bod=$body;

require 'PHPMailerAutoload.php';

	
    $mail = new PHPMailer();
    $mail->SMTPSecure = 'tls';
    $mail->Username = "issr_notreply@hotmail.com";
    $mail->Password = "asdfg#12345";
	//$mail->AddAddress($mailadd);
	foreach ($mailadd as $aa) 
	{
		$mail->AddAddress($aa);
	}	
    $mail->FromName = "Mohamed Mesheal";
    $mail->Subject = $sub;
    $mail->Body = $bod ;
    $mail->Host = "smtp.live.com";
    $mail->Port = 587;
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->From = $mail->Username;
    $mail->Send();

$mail->SMTPDebug = 0;
 
	
	
//var_dump($body);
if(!$mail->Send()) {
    //echo $body;

    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
   echo "Message sent successfully!";
}
?> 




