<?php


use PHPMailer\PHPMailer\PHPMailer;

require __DIR__.'/engine/modules/phpmailer/vendor/autoload.php';

//Usual setup
$mail = new PHPMailer();
$mail->setFrom('mail@medpoverennyi.ru', 'Medpoverennyi');
$mail->addAddress('tanden.anapa@gmail.com', 'tanden');
$mail->Subject = 'Вы успешно зарегистрированы на сайте https://medpoverennyi.ru';
$mail->msgHTML(file_get_contents('robots.txt'), __DIR__);

//This should be the same as the domain of your From address
$mail->DKIM_domain = $_SERVER['HTTP_HOST'];
//See the DKIM_gen_keys.phps script for making a key pair -
//here we assume you've already done that.
//Path to your private key:
$mail->DKIM_private = '/root/medpoverennyi.ru.private';
//Set this to your own selector
$mail->DKIM_selector = 'phpmailer';
//Put your private key's passphrase in here if it has one
//$mail->DKIM_passphrase = 'w1dvYPFb4P';
//The identity you're signing as - usually your From address
$mail->DKIM_identity = $mail->From;
//Suppress listing signed header fields in signature, defaults to true for debugging purpose
$mail->DKIM_copyHeaderFields = false;
//Optionally you can add extra headers for signing to meet special requirements
$mail->DKIM_extraHeaders = ['List-Unsubscribe', 'List-Help'];

//When you send, the DKIM settings will be used to sign the message
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}