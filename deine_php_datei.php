<?php
// Verbindung zur MySQL-Datenbank herstellen
$servername = "localhost"; // Servername
$username = "root";      // Benutzername für die Datenbank
$password = "";          // Passwort für die Datenbank
$dbname = "MemberData"; // Datenbankname

// Verbindung zur Datenbank herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich war
if ($conn->connect_error) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
}

// Daten aus dem Formular abrufen
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // SQL-Abfrage, um Daten in die Tabelle einzufügen
    $sql = "INSERT INTO lerncontent_anfragen (name, email) VALUES ('$name', '$email')";

    // Überprüfen, ob die Abfrage erfolgreich war
    if ($conn->query($sql) === TRUE) {
        echo "Email Anfrage wurde erfolgreich versendet!";
    } else {
        echo "Fehler beim Senden der Daten: " . $conn->error;
    }
}

// Verbindung zur Datenbank schließen
$conn->close();
?>
