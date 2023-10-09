<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meine Webseite</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap-Verknüpfungen, wie bereits in Ihrem Code -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        /* Stil für Produktkarten und Header */
        .product-card {
            border: 1px solid #ddd;
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .product-card img {
            max-width: 100%;
            height: auto;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        .product-card h3 {
            margin-top: 15px;
            font-size: 1.5rem;
        }

        .product-card p {
            margin-top: 10px;
            color: #555;
        }

        .product-card button {
            margin-top: 10px;
            background-color: rgba(219, 225, 32, 1); /* Geänderte Farbe */
        }


        /* Horizontale Anordnung des Footers */
        footer {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #f0f0f0;
        }

        .footer-content {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .newsletter input[type="email"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .newsletter button {
            margin-left: 10px;
            padding: 10px 20px;
            background-color: rgba(219, 225, 32, 1); /* Geänderte Farbe */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Stil für Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #f0f0f0;
        }

        .logo {
            max-width: 100px;
            height: auto;
        }

        .search-bar {
            flex: 1;
            margin: 0 20px;
        }

        .search-bar input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .login-form {
            display: flex;
            align-items: center;
        }

        .login-form span {
            margin-right: 10px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        /* Stil für die Sidebar */
        .sidebar {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 5px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar li {
            margin-bottom: 20px;
        }

        /* Schmale Kategorienbox und Textausrichtung */
        .sidebar h2 {
            text-align: left;
            font-size: 1.2rem;
        }

        .sidebar ul li a {
            text-align: left;
            font-size: 1rem;
        }
    </style>
</head>
<body>
<?php
// Zugangsdaten zur Datenbank
$servername = "localhost"; // Hier sollte der Servername (z. B. "localhost") stehen, nicht der Benutzername
$username = "root"; // Benutzername für die Datenbank
$password = ""; // Passwort für die Datenbank
$db = "MemberData";

// Erstellen Sie eine Verbindung zur Datenbank
$con = new mysqli($servername, $username, $password, $db);

// Überprüfen Sie, ob die Verbindung erfolgreich hergestellt wurde
if ($con->connect_error) {
    die("Tut mir Leid, etwas lief schief: " . $con->connect_error);
}

// Verarbeiten des Formulars, wenn es gesendet wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $password = $_POST["password"];

    // Passwort mit password_hash verschlüsseln
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // SQL-Abfrage, um Daten in die Tabelle einzufügen
    $sql = "INSERT INTO User (Name, Password) VALUES ('$name', '$hashedPassword')";

    // Überprüfen, ob die Abfrage erfolgreich war
    if ($con->query($sql) === TRUE) {
        echo "Du bist erfolgreich registriert worden";
    } else {
        echo "Es tut mir Leid, leider lief etwas schief: " . $con->error;
    }
}

// Schließen Sie am Ende die Verbindung zur Datenbank
$con->close();
?>

<header>
    <div>
        <img src="Assets/logo.jpg" alt="logo" class="logo">
    </div>
    <div class="search-bar">
        <input type="text" placeholder="Suchen">
    </div>
    <div class="login-form">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Benutzername" required>
                <input type="password" class="form-control" name="password" placeholder="Passwort" required>
            </div>
            <button id="register-button" class="btn btn-primary" type="submit">Registrieren</button>
        </form>
    </div>
</header>




<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.html">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="datenschutz.html">DATENSCHUTZ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="forum.html">FORUM</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="lerncontent.html">MEIN LERNCONTENT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.html">KONTAKT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ueberuns.html">ÜBER UNS</a>
        </li>
    </ul>
</nav>

<div class="container shop-container">
    <div class="row">
        <div class="col-md-3 sidebar">
            <h2>Kategorien</h2>
            <ul>
                <li><a href="lerncontent.html">KURSE</a></li>
                <li><a href="forum.html">FORUM</a></li>
                <li><a href="eventplaner.html">EVENTPLANER</a></li>
                <li><a href="#">MITTEILUNGEN</a></li>
            </ul>
        </div>
        <div class="col-md-9 main-content">
            <h1>Willkommen auf unserer E Learning-Plattform für Programmierer und Grafikdesigner!</h1>
            <div class="product-list">
                <div class="product-card">
                    <img src="Assets/bild1.png" alt="solar">
                    <h3>WEB DEVELOPER KURS</h3>
                    <p>Preis: $13.99 qm</p>
                    <button id="kurs1" class="btn btn-primary">KURS BESUCHEN</button>
                </div>
                <div class="product-card">
                    <img src="Assets/bild2.png" alt="coder">
                    <h3>CODER KURS</h3>
                    <p>Preis: $18.99 qm</p>
                    <button id="kurs2" class="btn btn-primary">KURS BESUCHEN</button>
                </div>
                <div class="product-card">
                    <img src="Assets/bild3.png" alt="designer">
                    <h3>DESIGNER MASTER KURS</h3>
                    <p>Preis: $74.99 qm</p>
                    <button id="kurs3" class="btn btn-primary">KURS BESUCHEN</button>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="footer-content">
        <div class="newsletter">
            <h4>Newsletter anmelden & Vorteile sichern</h4>
            <input type="email" placeholder="Deine E-Mail-Adresse">
            <button class="btn btn-primary">Anmelden</button>
        </div>
        <div class="footer-links">
            <ul>
                <li><a href="ueberuns.html">Über uns</a></li>
                <li><a href="contact.html">Kontakt</a></li>
                <li><a href="agb.html">AGB</a></li>
                <li><a href="datenschutz.html">Datenschutz</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-ads">
        <div class="ad">
            <img src="Assets/garanted.png" alt="Garanted" width="100" height="100">
        </div>
    </div>

    <p>© 2023 Meine Webseite. Alle Rechte vorbehalten.</p>
</footer>
</body>
</html>
<script>
    // Diese Funktion wird aufgerufen, wenn auf einen Button geklickt wird
    function buttonClickHandler(buttonId) {
        alert(`Button mit ID ${buttonId} wurde geklickt!`);
    }

    // Event Listener hinzufügen, um auf Klicks der Buttons zu reagieren
    document.getElementById('kurs1').addEventListener('click', function () {
        buttonClickHandler('kurs1');
    });

    document.getElementById('kurs2').addEventListener('click', function () {
        buttonClickHandler('kurs2');
    });

    document.getElementById('kurs3').addEventListener('click', function () {
        buttonClickHandler('kurs3');
    });
</script>
