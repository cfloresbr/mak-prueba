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
    header("Location: http://190.97.170.216/mak-prueba/en/contacto.php");
    exit;
}

if(!isset($_POST['name']) || trim($_POST['name']) === "" 
|| !isset($_POST['mail']) || trim($_POST['mail']) === ""
|| !isset($_POST['comentario']) || trim($_POST['comentario']) === "") {
    $_SESSION['status'] = 'You must complete name, email and comment to send a contact message.';
    header("Location: http://190.97.170.216/mak-prueba/en/contacto.php");
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
    $mail->Host = 'smtp.office365.com';                  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'info@itservice.consulting';             // SMTP username
    $mail->Password = 'ServiceIT@2023.';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable SSL encryption, TLS also accepted with port 465
    $mail->Port = 25;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('info@itservice.consulting', 'Contacto');          //This is the email your form sends From
    $mail->addAddress('cflores@itservice.consulting', 'MAK'); // Add a recipient address
    //$mail->addAddress('ivalderrama.lorca@gmail.com', 'Joe User'); // Add a recipient address

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Nueva consulta desde el portal';
    $mail->Body    = 'Nombre: ' . $name . '<br> Correo: ' . $email . '<br> Telefono: ' . $telefono . '<br> Comentario: "' . $message . '"';

    $mail->send();
    $_SESSION['status'] = 'Message sent. Thank you so much';
    unset($_SESSION['token']);
    header("Location: http://190.97.170.216/mak-prueba/en/contacto.php");
} catch (Exception $e) {
    $_SESSION['status'] = 'Problems sending the message. Try again later';
    header("Location: http://190.97.170.216/mak-prueba/en/contacto.php");
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
