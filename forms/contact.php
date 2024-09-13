<?php
$receiving_email_address = 'bouchfar.s.fst@uhp.ac.ma';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Simple email structure without external libraries for testing
    $headers = "From: $name <$email>";
    if (mail($receiving_email_address, $subject, $message, $headers)) {
        echo 'Votre message a été envoyé. Merci !';
    } else {
        echo 'Erreur lors de l\'envoi du message.';
    }
} else {
    echo 'Méthode non autorisée';
}
?>
