<?php
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->isSMTP();                                            //Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                             //Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                     //Enable SMTP authentication
$mail->Username = 'dzubiaurreoc15dw@ikzubirimanteo.com';    //SMTP username
$mail->Password = 'HERNANI93';                              //SMTP password
$mail->SMTPSecure = 'ssl';                                  //Enable LS encryption. 'ssl' also accepted
$mail->Port = 465;                                          //TCP port to connect to

$mail->setFrom('dzubiaurreoc15dw@ikzubirimanteo.com', 'Mailer');
$mail->addAddress('frogafroga6@gmail.com', 'prueba prueba');           //Add a recipient //frogafroga6@gmail.com password -->pruebaphp
//$mail->addAddress('ellen@example.com');                   //Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bbc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');               //Add attachments
//$mail->AddAttachment('/tmp/image.jpg','new.jpg');         //Optional name
$mail->isHTML(true);                                        //Set email format to HTML
$mail->Subject = 'Prueba PHPMailer';
$mail->Body    = 'Esta es una prueba <b>inbold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTL mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent';
    echo 'Mailer Error: ' .$mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}





?>