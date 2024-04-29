<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "drako2004riz@gmail.com"; // Remplacez par votre adresse e-mail
    $subject = "Nouveau message de formulaire de contact";
    $name = $_POST["name"];
    $from = $_POST["email"];
    $message = $_POST["message"];
    $headers = "From: $name <$from>";

    // Envoyer l'e-mail
    mail($to, $subject, $message, $headers);

    // Redirection vers une page de confirmation ou un message de réussite
    header("Location: confirmation.html");
    exit();
}
?>
