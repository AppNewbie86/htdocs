<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Überprüfen, ob Benutzername und Passwort gesendet wurden
    if (isset($_POST["benutzername"]) && isset($_POST["passwort"])) {
        $benutzername = $_POST["benutzername"];
        $passwort = $_POST["passwort"];

        // Zugangsdaten zur Datenbank
        $servername = "localhost";
        $user = "root";
        $password = "";
        $db = "MemberData";

        // Erstellen Sie eine Verbindung zur Datenbank
        $con = new mysqli($servername, $user, $password, $db);

        // Überprüfen Sie, ob die Verbindung erfolgreich hergestellt wurde
        if ($con->connect_error) {
            die("Tut mir Leid, etwas lief schief: " . $con->connect_error);
        }

        // Führen Sie hier Ihre Datenbankoperationen durch, z.B. das Einfügen des Benutzers

        $sql = "INSERT INTO User (Name, Password) VALUES ('$benutzername', '$passwort')";

        if ($con->query($sql) === TRUE) {
            echo "Du bist erfolgreich registriert worden";
        } else {
            echo "Es tut mir Leid leider lief etwas schief" . $con->error;
        }

        // Schließen Sie die Verbindung zur Datenbank
        $con->close();
    }
}
?>
