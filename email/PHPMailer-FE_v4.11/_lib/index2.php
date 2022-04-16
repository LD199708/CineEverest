
<?php 

/*Lo primero es añadir al script la clase phpmailer desde la ubicación en que esté*/
require ('class.phpmailer.php');
//require_once ('vendor/autoload.php') ;


 
//Crear una instancia de PHPMailer
$mail =new PHPMailer();
$mail->From = "isaacbch3@gmail.com"; 
$mail->FromName = "Diana"; 
$mail->addAddress("isaacbch3@gmail.com", "Recipient Name"); //Provide file path and name of the attachments 
//$mail->addAttachment("file.txt", "File.txt");    
//$mail->addAttachment("images/profile.png"); //Filename is optional 
$mail->isHTML(true); 
$mail->Subject = "testing"; 
$mail->Body = "<i>holas</i>"; 
$mail->AltBody = "This is the plain text version of the email content"; 
if(!$mail->send()) 
{ 
echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{ 
echo "Message has been sent successfully"; 
}

?>