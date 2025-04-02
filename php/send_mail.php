<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "teissier.thomas@laposte.net";
    $subject = "Nouveau message de contact";
    $headers = "From: " . $email . "\r\n" .
        "Reply-To: " . $email . "\r\n" .
        "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "Nom: $name\n" .
        "Email: $email\n\n" .
        "Message:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message envoyé avec succès !');</script>";
    } else {
        echo "<script>alert('Erreur lors de l'envoi du message.');</script>";
    }
}
?>