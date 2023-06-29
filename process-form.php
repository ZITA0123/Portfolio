<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "gnekoufontsing@et.esiea.fr";
    $subject = "New Contact Form Submission";
    $messageBody = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

    // En-têtes de l'e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envoi de l'e-mail
    if (mail($to, $subject, $messageBody, $headers)) {
        // Redirection vers une page de succès ou affichage d'un message de succès
        header("Location: index.html");
        exit;
    } else {
        // Redirection vers une page d'erreur ou affichage d'un message d'erreur
        header("Location: index.html");
        exit;
    }
}
?>
