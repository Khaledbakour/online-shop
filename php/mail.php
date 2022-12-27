<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail=new PHPMailer();
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'nordermarkt@gmail.com';                     //SMTP username
$mail->Password   = 'hvrizrzjttovzfty';                               //SMTP password
$mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
$mail->Port       = 465;
$mail-> CharSet="UTF-8";

//Content
$mail->isHTML(true);