<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure les fichiers PHPMailer
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Configurer SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';  // Serveur SMTP de Gmail
    $mail->SMTPAuth   = true;
    $mail->Username   = 'ton-email@gmail.com'; // Ton adresse Gmail
    $mail->Password   = 'ton-mot-de-passe-app'; // Mot de passe d'application (explication ci-dessous)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Destinataire
    $mail->setFrom('ton-email@gmail.com', 'Malak Mestini'); // Expéditeur
    $mail->addAddress('mestini.malak@etu.uae.ac.ma', 'Malak'); // Destinataire

    // Contenu du message
    $mail->isHTML(true);
    $mail->Subject = 'Test PHPMailer';
    $mail->Body    = 'Ceci est un test d\'envoi d\'email avec PHPMailer.';

    // Envoyer l'email
    $mail->send();
    echo '✅ Message envoyé avec succès !';
} catch (Exception $e) {
    echo "❌ Erreur lors de l'envoi du message : {$mail->ErrorInfo}";
}
?>