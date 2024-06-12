<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si los campos existen y no están vacíos
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        $mail = new PHPMailer(true);
        try {
            // Configuración del servidor
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';  // Set the SMTP server to send through
            $mail->SMTPAuth = true;
            $mail->Username = 'pabloramil2000@gmail.com'; // SMTP username
            $mail->Password = 'endeavourcaca1'; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Destinatarios
            $mail->setFrom($email, $name);
            $mail->addAddress('pabloramil2000@gmail.com');

            // Contenido
            $mail->isHTML(true);
            $mail->Subject = "Nuevo mensaje de contacto de $name";
            $mail->Body    = "Nombre: $name<br>Correo Electrónico: $email<br>Mensaje:<br>$message";

            $mail->send();
            echo 'Mensaje enviado con éxito.';
        } catch (Exception $e) {
            echo "Hubo un error al enviar el mensaje. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Por favor, complete todos los campos del formulario.";
    }
}
?>
