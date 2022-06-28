<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
// require ("class.phpmailer.php");
// require ("./includes/templates/footer.php");

$mail = new PHPMailer();

$mail->Host = "smtp.gmail.com";
$mail->From = "pootnicolas1@gmail.com";
$mail->FromName = "Nicolas Poot";
$mail->Subject = "Prueba";
$mail->AddAddress("pootnicolas1@gmail.com","Nombre 01"); 

$nombre = $_POST['nombreCliente '];
$apellido = $_POST['apellidoCliente '];
$emailCliente = $_POST['emailCliente'];
$telefonoCliente = $_POST['telefonoCliente'];
$mensajeCliente = $_POST['mensajeCliente'];


$mail->isHTML(true);         

$cuerpo = "Tienes un nuevo correo de la pagina, es de: <br>".$nombre.$apellido."<br> su correo es: ".$emailCliente."<br> su telefono es: ".$telefonoCliente."<br> y su mensaje es el siguiente:<br> ".$mensajeCliente;
$mail->Subject = $nombre.$apellido;
$mail->Body = $cuerpo;

$email->Send();


?>