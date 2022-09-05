<?php

$nombre=$_POST['nom'];
$apellido= $_POST['ape'];
$tel=$_POST['tele'];
$correo=$_POST['correo'];
$contenido=$_POST['mensaje'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
     $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                )
            );



    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'daniela.de193@tectijuana.edu.mx';                     //SMTP username
    $mail->Password   = 'cB29m79kj';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('daniela.de193@tectijuana.edu.mx', $nombre.' '.$apellido);
    $mail->addAddress('danielayamahoka551@gmail.com', 'ADOPTME');     //Add a recipient



    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'CONTACTO ADOPTME';
    $mail->Body    = $contenido.'              DATOS DEL USUARIO: '.$tel.' '.$correo.' ';

    $mail->send();
    echo 'Mensaje ENVIADO';
} catch (Exception $e) {
    echo "Mensaje De Error: {$mail->ErrorInfo}";
}
?>