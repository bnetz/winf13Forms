<?php
require_once('classes/Formhandler.class.php');
$f = new Formhandler($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>6 Formularhandling mit OOP</title>
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
        <h1>7 Formularhandling mit OOP - LEVEL 2 (einfach): ÜBUNG</h1>
            <p class="lead">Wir bauen uns eine Klasse, die uns bei der Formularauswertung hilft.</p>
        </div>

        <!-- #### FORMULAR START ### -->
        <div class="row border rounded p-3">

            <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST">
                <label for="tfName">Dein Name:</label>
                <input type="text" name="tfName" placeholder="John Doe …">
                <input type="submit" name="btSubmit">
            </form>
        </div>
        <!-- #### FORMULAR ENDE ### -->

        <div class="row">
            <p>Wir brauchen keine Hunde und Katzen, sondern eine Klasse, die uns später bei der Formularauswertung hilft. Dafür haben wir eine entsprechende Klasse, die importiert wird und von der wir ein Objekt erzeugen. Siehe ganz oben in dieser Datei.</p>
            <p>Was <strong>neu</strong> ist: Wir geben dieser Klasse im Konstruktor das ganze <code>$_POST</code>-Array - dann kann die das verwalten (z.B. checken, ob das Formular abgeschickt wurde, welche Felder leer sind, ob ein Feld einen bestimmten Wert enthält …).</p>
            <p><em>Hinweis für die Schnellen: Falls wir Berechnungen durchführen wollen (Öltanker :-)), verwenden wir natürlich eine neue Klasse.</p>
        </div>

        <div class="row mt-5">
            <?php
            if($f->isSubmitted()) {
                echo "<h2>Formular abgeschickt!</h2>";
                echo "<p>" . $f->processInput() . "</p>";
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>