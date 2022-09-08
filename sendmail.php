<?php

use PHPMailer\PHPMailer\Exception;

use PHPMailer\PHPMailer\PHPMailer;


require 'assets/PHPMailer/src/Exception.php';
require 'assets/PHPMailer/src/PHPMailer.php';


$mail = new PHPMailer(true);

$mail->Host   = 'Введите домен хоста';
$mail->CharSet = "UTF-8";
$mail->setLanguage("ru", "phpmailer/language/");
$mail->IsHTML(true);


$mail->setFrom("Введите почту отправителя");
$mail->addAddress("Введите почту получателя");



if (trim(!empty($_POST["email"]))) {
	$body .= '<p><strong>E-mail:</strong> ' . $_POST['email'] . '</p>';
}

$mail->Body = $body;

if (!$mail->send()) {
	$message = "Ошибка";
} else {
	$message = "Данные отправлены!";
}

$response = ["message" => $message];


header("Contnet-type: application/json");
echo json_encode($response);
