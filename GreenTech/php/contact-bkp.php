<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Demo Contact Form'; 
        $to = 'gonjavrod@gmail.com'; 
        $subject = 'Message from Contact Demo ';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Por favor ingrese su nombre';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Por favor ingrese una dirección de correo válida';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Por favor ingrese su mensaje';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'La comprobación de humano es incorrecta';
        }
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Muchas gracias por escribirnos. En breve un representante se pondrá en contacto con usted.</div>';
    } else {
        $result='<div class="alert alert-danger">Lo sentimos. Ha habido un error al enviar su mensaje. Por favor intente nuevamente más tarde. Gracias.</div>';
    }
}
    
?>