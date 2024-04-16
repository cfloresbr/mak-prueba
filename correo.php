<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
//Start the session if already not started.
session_start();

if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
    $_SESSION['status'] = 'Formulario invalido';
    header("Location: http://190.97.170.216/mak-prueba/es/contacto.php");
    exit;
}

if(!isset($_POST['name']) || trim($_POST['name']) === "" 
|| !isset($_POST['mail']) || trim($_POST['mail']) === ""
|| !isset($_POST['comentario']) || trim($_POST['comentario']) === "") {
    $_SESSION['status'] = 'Debe completar nombre, correo y comentario para enviar un mensaje de contacto.';
    header("Location: http://190.97.170.216/mak-prueba/es/contacto.php");
    exit;
}

$name = $_POST['name'];
$email = $_POST['mail'];
$telefono = $_POST['phone'];
$message = $_POST['comentario'];

try {
    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'info.mak.abogados@gmail.com';             // SMTP username
    $mail->Password = 'wiym aaum bivs uxeq';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable SSL encryption, TLS also accepted with port 465
    $mail->Port = 25;                                    // TCP port to connect to
//25
    //Recipients
    $mail->setFrom('info.mak.abogados@gmail.com', 'Contacto');          //This is the email your form sends From
    $mail->addAddress('mak@mak.cl', 'MAK'); // Add a recipient address
    //$mail->addAddress('ivalderrama.lorca@gmail.com', 'Joe User'); // Add a recipient address

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Nueva consulta desde el portal';
    $mail->Body    = 'Nombre: ' . $name . '<br> Correo: ' . $email . '<br> Telefono: ' . $telefono . '<br> Comentario: "' . $message . '"';

    $mail->send();
    $_SESSION['status'] = 'Mensaje enviado. Muchas gracias';
    unset($_SESSION['token']);
    header("Location: http://190.97.170.216/mak-prueba/es/contacto.php");
} catch (Exception $e) {
    $_SESSION['status'] = 'Problemas para enviar el mensaje. Intentelo más tarde';
    header("Location: http://190.97.170.216/mak-prueba/es/contacto.php");
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
