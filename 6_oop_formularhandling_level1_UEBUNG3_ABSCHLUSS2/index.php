<?php
// Fehleranzeige einschalten - das müssen Sie nicht verstehen, aber es hilft
// Ihnen vielleicht weiter
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>6 Formularhandling mit OOP, Level 1: Abschlussübung 2</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Start</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="https://startbootstrap.com/template/bare">Template Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://informatik-bg.de/html-php-sql/html-css-templates-bootstrap">ibg</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ressourcen</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="https://www.w3schools.com/html/html_form_input_types.asp">HTML Input Types</a></li>
                            <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.0/getting-started/introduction/">Bootstrap Einführung</a></li>
                            <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.0/forms/overview/">Formulare in Bootstrap</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.0/forms/overview/">Übersicht/Textfelder</a></li>
                            <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.0/forms/checks-radios/">Checkboxen/Radios</a></li>
                            <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.0/forms/select/">Select-Dropdowns</a></li>
                            <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.0/forms/range/">Range-Slider</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page content-->
    <div class="container">
        <div class="text-center mt-5">
            <h1>6 Formularhandling mit OOP - LEVEL 1 (einfach): Abschlussübung 2</h1>
            <p class="lead">Sie programmieren eine eigene App, die ein HTML-Formular auswertet.</p>
        </div>

        <!-- #### FORMULAR START ### -->
        <div class="row border rounded p-3 bg-dark text-light mb-3 bg-gradient-dark ">

            <form action="pflurps.php" method="POST">
                <label for="tfUsername">Username:</label>
                <input type="text" name="tfUsername" placeholder="">
                <label for="tfPassword">Password:</label>
                <input type="password" name="tfPassword" placeholder="">
                <input type="submit" name="btSubmit" value="Login">
            </form>
        </div>
        <!-- #### FORMULAR ENDE ### -->

        <div class="row">
        <h2>Themen</h2>    
        <p>Hier nochmal eine Übersicht darüber, was Sie können sollten.</p>
        <ul>
        <li>Formular zeigt auf die eigene Seite.</li>
        <li>Klassen einbinden und Objekte erzeugen.</li>
        <li>Klassen mit Attributen und Methoden ausstatten.</li>
        <li>Parametrisierten Konstruktor zur Initialisierung von Attributen verwenden.</li>
        <li>Objekte und deren Methoden in der index.php verwenden.</li>
        <li>isset(…) verwenden.</li>
        </ul>
        <h2>Ihr Job</h2>
        <p>Letztlich sollen Sie genau das gleiche tun wie in der vorigen Aufgabe - nur diesmal mit OOP. Das bedeutet, dass Sie eine Klasse anlegen, die das <code>$_POST</code>-Array bekommt und das Formularhandling organisiert (checken, ob das Formular gesendet wurde; prüfen, ob das Passwort richtig ist; usw.).</p>
        <p>Nach Abschicken des Formulars soll geprüft werden, ob das Passwort "r2D2!" ist. Wenn das der Fall ist, wird in grüner Schrift ausgegeben "Hanspeter, du wurdest erfolgreich eingeloggt". Wenn das Passwort falsch ist, wird in roter Schrift ausgegeben "Passwort falsch - beep beep beep!"</p>
        <p>Wenn das Formular leer abgesendet wurde, wird ausgegeben "Bitte Formular ausfüllen!!"</p>

        <p>
        </div>

        <div class="row mt-5">
           <p>Hier könnten Sie Ihre AUsgaben vornehmen - oder sonstwo. Ist mir egal.</p>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>