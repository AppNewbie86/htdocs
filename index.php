

<!DOCTYPE html>
<html>
<body>
<?php

// Zugangsdaten zur Datenbank
$servername = "localhost"; // Hier sollte der Servername (z. B. "localhost") stehen, nicht der Benutzername
$user = "root"; // Benutzername für die Datenbank
$password = ""; // Passwort für die Datenbank
$db ="MemberData";
// Erstellen Sie eine Verbindung zur Datenbank
$con = new mysqli($servername, $user, $password, $db);

// Überprüfen Sie, ob die Verbindung erfolgreich hergestellt wurde
if ($con->connect_error) {
    die("Tut mir Leid, etwas lief schief: " . $con->connect_error);
}
$sql = "INSERT INTO User (Name,Password) VALUES ('Bruce Wayne','Geisterbahn34')";
// Überprüfung ob alles Richtig ist
if ($con->query($sql) === TRUE) {
    echo "Du bist erfolgreich registriert worden"; // Statement wenn alles I.O
}
else {
    // Statement wenn etwas schief lief
    echo "Es tut mir Leid leider lief etwas schief". $con->error;
}
// Hier können Sie SQL-Abfragen und andere Datenbankoperationen ausführen

// Schließen Sie am Ende die Verbindung zur Datenbank
$con->close();

?>



</body>
</html>


