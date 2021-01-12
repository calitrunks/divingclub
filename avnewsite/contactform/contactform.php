<?php

$para      = 'somosaventureros.cl@gmail.com';
//$para      = "calitrunks@gmail.com";
$asunto    = 'Contacto Web';
$mensaje   = "Nombre:".$_POST["name"]."\r\n";
$mensaje   .= "Email:".$_POST["email"]."\r\n";
$mensaje   .= "Telefono:".$_POST["telefono"]."\r\n";
$mensaje   .= "Mensaje:".$_POST["message"]."\r\n";
$cabeceras = 'From: somosave@somosaventureros.cl' . "\r\n" .
    'Reply-To: somosave@somosaventureros.cl' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $asunto, $mensaje, $cabeceras);
echo "OK";
?>