<?php
$nombre = $_POST['c_fname'];
$mail = $_POST['c_femail'];
$mensaje=$_POST['c_fmensaje'];


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje .= "Email: " . $mail . " \r\n\n";
$mensaje .= "Mensaje: " . $_POST['c_fmensaje'] . " \r\n";
$mensaje .= "\nEnviado el " . date('d/m/Y', time());

$para = 'jack20-10@hotmail.es';/* <- email destinario*/
$asunto = 'Mensaje de mi Portafolio';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:../index.php?success");
?>