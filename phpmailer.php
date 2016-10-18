<?php
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->isSMTP();                                            //Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                             //Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                     //Enable SMTP authentication
$mail->Username = 'dzubiaurreoc15dw@ikzubirimanteo.com';    //SMTP username
$mail->Password = 'HERNANI93';                              //SMTP password
$mail->SMTPSecure = 'tls';                                  //Enable LS encryption. 'ssl' also accepted
$mail->Port = 587;                                          //TCP port to connect to

$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress('joe@example.net', 'Joe User');           //Add a recipient
//$mail->addAddress('ellen@example.com');                   //Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBBC('bbc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');               //Add attachments
//$mail->AddAttachment('/tmp/image.jpg','new.jpg');         //Optional name
$mail->isHTML(true);                                        //Set email format to HTML
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>inbold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTL mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent';
    echo 'Mailer Error: ' .$mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}





?>