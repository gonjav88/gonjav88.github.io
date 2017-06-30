<?php

## CONFIG ##

# LIST EMAIL ADDRESS ##
$recipient = "info@greentech.com.ar";
$recipient2 = $_REQUEST['email'];

$remit_mail = $_REQUEST['email'];
$remit_name = $_REQUEST['name'];

## FORM VALUES ##
$name = $_REQUEST['name'];
$human = $_REQUEST['human'];
$message = $_REQUEST['message'];
$formsubject = $_REQUEST['subject'];

# SUBJECT (Subscribe/Remove)
$subject = "Mail de Consulta de $remit_name $remit_mail";
$subject2 = "GreenTech - Consulta recibida. Asunto: $formsubject";

# RESULT PAGE
$location = "http://www.greentech.com.ar/form-ok.php";



# SENDER 
$sender = $recipient;

# MAIL BODY
$body .= "Name: ".$_REQUEST['name']." \n";
$body .= "Email: ".$_REQUEST['email']." \n";
$body .= "Asunto: ".$_REQUEST['subject']." \n";
$body .= "Mensaje: ".$_REQUEST['message']." \n";

# MAIL 2 BoDy #
$body2 .= "Gracias $remit_name por ponerse en contacto con nosotros, en breve estaremos respondiendo su consulta. \n";
$body2 .= "Muchas gracias \n";
$body2 .= "\n Mensaje original: $message";


## SEND MESSGAE ##
if ($human == 5) {
    mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");
    mail( $remit_mail, $subject2, $body2, "From: $sender") or die ("Mail rta not be sent");
    ## RESULT PAGE ##
    header( "Location: $location" );
} else {
    header("Location: http://greentech.com.ar/form-error.php");
}

?>