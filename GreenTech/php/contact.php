<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "info@greentech.com.ar";
$recipient2 = $_REQUEST['email'];

$remit_mail = $_REQUEST['email'];
$remit_name = $_REQUEST['name'];


# SUBJECT (Subscribe/Remove)
$subject = "Mail de Consulta de $remit_name $remit_mail";
$subject2 = "Consulta recibida";

# RESULT PAGE
$location = "http://www.greentech.com.ar";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = $recipient;

# MAIL BODY
$body .= "Name: ".$_REQUEST['name']." \n";
$body .= "Email: ".$_REQUEST['email']." \n";
$body .= "Email: ".$_REQUEST['subject']." \n";
$body .= "Email: ".$_REQUEST['message']." \n";

# add more fields here if required
$body2 .= "Gracias por ponerse en contacto con nosotros, en breve estaremos respondiendo su consulta. \n";
$body2 .= "Muchas gracias \n";


## SEND MESSGAE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");
mail( $remit_mail, $subject2, $body2, "From: $sender") or die ("Mail rta not be sent");

## SHOW RESULT PAGE ##

header( "Location: $location" );

?>