<?php

## CONFIG ##

# LIST EMAIL ADDRESS ##
$recipient = "steffen-torres@stestudiojuridico.com.ar";
$recipient2 = $_REQUEST['email'];

$remit_mail = $_REQUEST['email'];
$remit_name = $_REQUEST['name'];
$remit_surname = $_REQUEST['surname']:


## FORM VALUES ##
$name = $_REQUEST['name'];
$surname = $_REQUEST['surname'];

$message = $_REQUEST['message'];
$formsubject = $_REQUEST['subject'];

# SUBJECT (Subscribe/Remove)
$subject = "Mail de Consulta de $remit_name $remit_surname $remit_mail";
$subject2 = "ST Estudio Jurídico - Consulta recibida. Asunto: $formsubject";

# RESULT PAGE
$location = "http://www.stestudiojuridico.com.ar";


# SENDER 
$sender = $recipient;

# MAIL BODY
$body .= "Nombre: ".$_REQUEST['name']." \n";
$body .= "Apellido: ".$_REQUEST['surname']." \n";
$body .= "Email: ".$_REQUEST['email']." \n";
$body .= "Teléfono: ".$_REQUEST['tel']." \n";
$body .= "Ciudad: ".$_REQUEST['city']." \n";
$body .= "Asunto: ".$_REQUEST['subject']." \n";
$body .= "Mensaje: ".$_REQUEST['message']." \n";

# MAIL 2 BoDy #
$body2 .= "Gracias $remit_name por ponerse en contacto con nosotros, en breve estaremos respondiendo su consulta. \n";
$body2 .= "Muchas gracias \n";
$body2 .= "\n Mensaje original: $message";


## SEND MESSGAE ##
	mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");
	mail( $remit_mail, $subject2, $body2, "From: $sender") or die ("Mail rta not be sent");

	header("Location: $location");
?>