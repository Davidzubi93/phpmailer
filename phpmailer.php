<?php
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
require 'password.php';
$mail = new PHPMailer;

//Enable SMTP debugging. 
$mail->SMTPDebug = 3;   
//Set mailer to use SMTP
$mail->isSMTP();                                            
//Specify main and backup SMTP servers
$mail->Host = 'smtp.gmail.com';                             
//Enable SMTP authentication
$mail->SMTPAuth = true;                                     
 //SMTP username
$mail->Username = 'dzubiaurreoc15dw@ikzubirimanteo.com';   
//SMTP password
$mail->Password = $pass;                                    
 //Enable LS encryption. 'ssl' also accepted
$mail->SMTPSecure = 'tls';                                 
//TCP port to connect to
$mail->Port = 587;                                          

$mail->From = 'dzubiaurreoc15dw@ikzubirimanteo.com';
$mail->FromName= 'David';
//Add a recipient //frogafroga6@gmail.com password -->pruebaphp
$mail->addAddress('frogafroga6@gmail.com', 'prueba prueba');    

$mail->isHTML(true);

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