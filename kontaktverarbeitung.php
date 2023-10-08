<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $nachricht = $_POST["nachricht"];

    // Empfänger-E-Mail-Adresse
    $zieladresse = "mydevelopertestemailaccount@web.de"; // Ersetzen Sie dies durch die gewünschte E-Mail-Adresse

    // Betreff
    $betreff = "Kontaktanfrage von $name";

    // Nachricht
    $nachricht = "Name: $name\n";
    $nachricht .= "E-Mail: $email\n\n";
    $nachricht .= "Nachricht:\n$nachricht";

    // E-Mail-Header
    $header = "From: $email";

    // E-Mail senden
    if (mail($zieladresse, $betreff, $nachricht, $header)) {
        echo "Ihre Nachricht wurde erfolgreich versendet.";
    } else {
        echo "Beim Senden Ihrer Nachricht ist ein Fehler aufgetreten. Bitte versuchen Sie es erneut.";
    }
}
?>
