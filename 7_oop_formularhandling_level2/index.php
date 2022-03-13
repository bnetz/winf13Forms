<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Klasse Formhandler importieren und Objekt anlegen
require_once('classes/Formhandler.class.php');
$f = new Formhandler($_POST);

// Namen der Eingabefelder holen
$rbTermin = $f->getRbTerminName();
$selKuchen = $f->getSelKuchenName();
$btSubmit = $f->getBtSubmitName();

if(isset($f->))

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>7 Formularhandling mit OOP - Verbessert</title>
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
            <h1>7 Formularhandling mit OOP - LEVEL 2 (medium)</h1>
            <p class="lead">Die Klasse <code>Formhandler</code> ist smarter und kennt jetzt die Namen unserer Formularfelder.</p>
        </div>

        <!-- #### FORMULAR START ### -->
        <div class="row border rounded p-3 form-control">

            <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST">
                <div class="row">
                    <div class="col-12 text-center mb-3">
                        <label for="<?php echo $selKuchen; ?>">Welchen Kuchen möchtest du backen?</label>
                        <select name="<?php echo $selKuchen; ?>">
                            <option value="apfel">Apfelkuchen</option>
                            <option value="donauwelle">Donauwelle</option>
                            <option value="brownies">Brownies</option>
                            <option value="muffins">Muffins</option>
                        </select>
                    </div>
                    <div class="col-12 text-center mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="<?php echo $rbTermin; ?>" id="rbTerminMontag" value="montag" checked>
                            <label class="radio-inline" for="rbTerminMontag">Montag</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="<?php echo $rbTermin; ?>" id="rbTerminFreitag" value="freitag">
                            <label class="radio-inline" for="rbTerminFreitag">Freitag</label>
                        </div>
                    </div>
                    <div class="col-12 text-center mb-3">
                        <input type="submit" name="<?php echo $btSubmitName; ?>">
                    </div>
                </div>
            </form>
        </div>
        <!-- #### FORMULAR ENDE ### -->

        <div class="row">
            <p>…………</p>
        </div>

        <div class="row mt-5">
            <h2>Formularanalyse</h2>
            <?php
            if ($f->isSubmitted()) {
                echo "<p>Formular wurde abgeschickt - geprüft mit Methode <code>isSubmitted()</code>.</p>";
                echo "<p>Ist das tfName leer? Wir prüfen <code>isTfNameEmpty()</code>:</p>";
                if ($f->isTfNameEmpty()) {
                    echo "<p><strong>Formular wurde abgeschickt, aber das Textfeld wurde LEER abgeschickt!!</strong></p>";
                } else {
                    echo "<p><strong>Formular wurde abgeschickt, und im Textfeld steht " . $f->getValueOfTfName() . "</strong></p>";
                }
            } else {
                echo "<p>Formular wurde NICHT abgeschickt - geprüft mit Methode <code>isSubmitted()</code>.</p>";
            }
            ?>
            <h2>Formularanalyse all-in-one</h2>
            <p>Hier verwenden wir die Methode <code>processInputAdvanced()</code>:</p>
            <p><?php echo $f->processInputAdvanced(); ?></p>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>