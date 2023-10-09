<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurse - Meine E-Learning-Plattform</title>
    <!-- Stil und Bootstrap-Verknüpfungen, wie bereits in Ihrem Code -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        /* Stil für Kurskarten */
        .course-card {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .course-card img {
            max-width: 100%;
            max-height: 200px; /* Feste Höhe für das Bild */
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        .course-card h3 {
            margin-top: 10px;
            font-size: 1.2rem;
        }

        .course-card p {
            margin-top: 5px;
            color: #555;
        }

        /* Ändern der Buttonfarbe auf rgba(219, 225, 32, 1) */
        .course-card button {
            margin-top: 10px;
            padding: 10px 15px;
            background-color: rgba(219, 225, 32, 1); /* Geänderte Farbe */
            color: #555;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Stil für die goldene Box */
        .gold-box {
            border: 2px solid gold; /* Goldener Rahmen */
            border-radius: 10px; /* Eckenradius */
            padding: 10px; /* Innenabstand für den Inhalt */
            margin: 10px; /* Außenabstand für Abstand zwischen den Karten */
        }

        /* Optional: Um den Text in den Boxen zu zentrieren */
        .gold-box img {
            display: block;
            margin: 0 auto;
        }

        /* Optional: Füge einen Schatten hinzu, um die Boxen hervorzuheben */
        .gold-box:hover {
            box-shadow: 0 0 10px gold;
        }

        /* Stil für das Karussell und die Bilder */
        .carousel {
            border: 2px solid gold;
            border-radius: 10px;
            overflow: hidden; /* Verstecke überlaufende Bilder */
            position: relative;
            width: 300px; /* Breite des Karussells */
            margin: 10px;
        }

        .carousel-inner {
            display: flex;
            transition: transform 0.3s ease; /* Animiere den Bildwechsel */
        }

        .carousel img {
            width: 100%; /* Bildgröße anpassen */
        }

        /* Stil für Ankündigungsbilder */
        .ankuendigungen {
            text-align: center;
            margin-top: 20px;
        }

        .ankuendigungen h2 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .ankuendigungs-title {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Stil für Ankündigungskarten */
        .ankuendigungs-card {
            display: inline-block;
            margin: 0 10px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .ankuendigungs-card img {
            max-width: 100%;
            max-height: 200px;
            border-radius: 5px;
        }

        /* Optional: Hinzufügen eines Hover-Effekts */
        .ankuendigungs-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.4);
        }

        /* Stil für die Interessen-Antragsbox */
        .interest-box {
            border: 2px solid rgba(219, 225, 32, 1); /* Rahmenfarbe wie der Button */
            padding: 20px;
            margin-top: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .btn-btn-primary {
            margin-top: 10px;
            padding: 10px 15px;
            background-color: rgba(219, 225, 32, 1); /* Geänderte Farbe */
            color: #555;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Entfernen des Footers */
        footer {
            display: none;
        }
    </style>
</head>
<body>
<!-- Header -->
<header>
    <div>
        <img src="Assets/logo.jpg" alt="logo" class="logo">
    </div>
</header>

<!-- Navigationsleiste -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ueberuns.html">ÜBER UNS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="datenschutz.html">DATENSCHUTZ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="forum.html">FORUM</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="lerncontent.html">KURSE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.html">KONTAKT</a>
        </li>
    </ul>
</nav>

<!-- Hauptinhalt -->
<div class="container course-container">
    <h1>Unsere Kurse</h1>
    <div class="row">
        <!-- Beispiel-Kurskarten (Können mehr hinzugefügt werden) -->
        <div class="col-md-3">
            <div class="course-card">
                <img src="Assets/html.png" alt="HTML KURS">
                <h3>HTML CSS KURS</h3>
                <p>Preis: $19.99</p>
                <button class="btn btn-primary">KURS BESUCHEN</button>
            </div>
        </div>
        <!-- Weitere Kurskarten hier einfügen -->
        <div class="col-md-3">
            <div class="course-card">
                <img src="Assets/php.png" alt="PHP KURS">
                <h3>PHP KURS</h3>
                <p>Preis: $24.99</p>
                <button class="btn btn-primary">KURS BESUCHEN</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="course-card">
                <img src="Assets/java.png" alt="JAVA KURS">
                <h3>JAVA KURS</h3>
                <p>Preis: $29.99</p>
                <button class="btn btn-primary">KURS BESUCHEN</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="course-card">
                <img src="Assets/android.png" alt="ANDROID KURS">
                <h3>ANDROID KURS</h3>
                <p>Preis: $34.99</p>
                <button class="btn btn-primary">KURS BESUCHEN</button>
            </div>
        </div>
        <!-- Weitere Kurskarten hier einfügen -->
    </div>

    <div class="row">
        <!-- Beispiel-Kurskarten (Können mehr hinzugefügt werden) -->
        <div class="col-md-3">
            <div class="course-card">
                <img src="Assets/nodejs.png" alt="NODE.JS KURS">
                <h3>NODE JS KURS</h3>
                <p>Preis: $23.99</p>
                <button class="btn btn-primary">KURS BESUCHEN</button>
            </div>
        </div>
        <!-- Weitere Kurskarten hier einfügen -->
        <div class="col-md-3">
            <div class="course-card">
                <img src="Assets/c++.png" alt="C++ KURS">
                <h3>C++ KURS</h3>
                <p>Preis: $24.99</p>
                <button class="btn btn-primary">KURS BESUCHEN</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="course-card">
                <img src="Assets/datenbank.png" alt="DATENBANK KURS">
                <h3>DATENBANK KURS</h3>
                <p>Preis: $29.99</p>
                <button class="btn btn-primary">KURS BESUCHEN</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="course-card">
                <img src="Assets/kotlin.png" alt="KOTLIN KURS">
                <h3>KOTLIN KURS</h3>
                <p>Preis: $44.99</p>
                <button class="btn btn-primary">KURS BESUCHEN</button>
            </div>
        </div>
        <!-- Weitere Kurskarten hier einfügen -->
    </div>

    <div class="ankuendigungen">
        <div class="ankuendigungs-title">
            <h2>Unsere Top Kurse des Monats</h2>
        </div>
        <div class="ankuendigungs-card gold-box">
            <img src="Assets/kurs1.png" alt="Swift UI Meister Kurs">
        </div>
        <div class="ankuendigungs-card gold-box">
            <img src="Assets/kurs2.png" alt="Design Meister Kurs">
        </div>
    </div>

    <!-- Interessen-Antragsbox -->
    <div class="interest-box">
        <h2>Interesse, Ihre Lernvideos beizusteuern?</h2>
        <p>Füllen Sie das folgende Antragsformular aus:</p>
        <button class="btn-btn-primary" data-toggle="modal" data-target="#interestModal">Antragsformular öffnen</button>
    </div>

</div>

<!-- Modal für das Antragsformular -->
<div class="modal fade" id="interestModal" tabindex="-1" role="dialog" aria-labelledby="interestModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interestModalLabel">Antragsformular für Lernvideos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Hier das Antragsformular einfügen -->
                <!-- Beispiel: -->
                <form method="POST" action="deine_php_datei.php"> <!-- Ersetze "deine_php_datei.php" durch den Dateinamen deiner PHP-Datei -->
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ihr Name">
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail-Adresse:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Ihre E-Mail-Adresse">
                    </div>
                    <!-- Weitere Formularfelder hier einfügen -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Schließen</button>
                        <button type="submit" class="btn btn-primary">Absenden</button> <!-- Hinzufügen einer Submit-Schaltfläche -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
