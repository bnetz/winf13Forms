<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>3 - HTML-Formular mit PHP auf einer Seite auswerten</title>
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
                                <li><hr class="dropdown-divider" /></li>
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
                <h1>3 HTML-Formular mit PHP auf der gleichen Seite auswerten</h1>
                <p class="lead">Wir verwenden nur eine Seite statt einer Formular- und einer Zielseite</p>
            </div>
            <div class="row">
            <p>Ab sofort leitet unser Formular (die <code>action</code>) auf die eigene Seite weiter. Dazu verwenden wir aber nicht den Dateinamen im Klartext, sondern <code>$_SERVER['SCRIPT_NAME']</code>. Erklärt wird das z. B. <a href="https://www.informatikzentrale.de/php-formular-gleiche-seite.html">hier</a>, letzte zwei Folien.</p>
            <p>Außerdem müssen wir prüfen, ob das Formular abgesendet wurde oder nicht. Wurde es nicht abgesendet, wirft uns etwas wie <code>$name = $_POST['vorname']</code> einen Fehler, da es im <code>$_POST</code>-Array ja kein initialisiertes Element mit dem Index 'vorname' gibt. Deshalb prüfen wir einfach mit <code>if(isset($_POST['nameDesSubmitKnopfs'])) { … }</code>, ob das Formular abgeschickt wurde oder erstmalig besucht wird. Siehe z.B. auch <a href="https://stackoverflow.com/a/9752226/1123668">hier</a>.</p>
            </div>
            <div class="row border rounded p-3">
            	<p>Hier Ihr Formular …………</p>
            
            </div>
            <div class="row mt-5">
            	<h3>Für die Schnellen</h3>
            	<p>Sie können bspw. dafür sorgen, dass die Formularfelder nach dem Abschicken mit den abgeschickten Werten vorausgefüllt werden. Oder dass das Formular nach erfolgreichem Abschicken NICHT MEHR angezeigt wird.</p>
            </div>
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
