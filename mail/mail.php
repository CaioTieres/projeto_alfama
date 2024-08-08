<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; 

$mail = new PHPMailer(true);

try {
    // Configurações do servidor
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'caiotieresb@gmail.com';
    $mail->Password   = 'akkz vkmj vouq ltmw';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;                                    

    // Destinatários
    $mail->setFrom('caiotieresb@gmail.com', 'Caio');
    $mail->addAddress('marcelw@alfamaweb.com.br', 'Cássio');

    // Conteúdo
    $mail->isHTML(true);
    $mail->Subject = 'AlfamaWeb';
    $mail->Body    = 'Email enviado do teste da <b>alfamaweb</b>';

    $mail->send();
    echo 'Email enviado com sucesso';
} catch (Exception $e) {
    echo "Falha ao enviar o email. Mailer Error: {$mail->ErrorInfo}";
}
?>
