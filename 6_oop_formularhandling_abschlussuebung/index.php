<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Klasse Formhandler importieren und Objekt anlegen
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
            <p class="lead">Zum Aufwärmen: In der Klasse <code>Formhandler</code> einige Methoden schreiben, u.a. Getter, und in index.php verwenden.</p>
        </div>

        <!-- #### FORMULAR START ### -->
        <div class="row border rounded p-3 form-control">

            <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST">
                <div class="row">
                    <div class="col-12 text-center mb-3">
                        <label for="selKuchen">Für welchen Kuchen brauchst du ein Rezept?</label>
                        <select name="selKuchen">
                            <option value="apfel">Apfelkuchen</option>
                            <option value="donauwelle">Donauwelle</option>
                            <option value="brownies">Brownies</option>
                            <option value="muffins">Muffins</option>
                        </select>
                    </div>

                    <div class="col-12 text-center mb-3">
                        <label for="tfGrund">Warum willst du einen Kuchen backen?</label>
                        <input type="text" name="tfGrund" placeholder="z.B. »Zu spät in den Unterricht gekommen«" class="col-4">
</div>
                    <div class="col-12 text-center mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rbTermin" id="rbTerminMontag" value="montag" checked>
                            <label class="radio-inline" for="rbTerminMontag">Montag</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rbTermin" id="rbTerminFreitag" value="freitag">
                            <label class="radio-inline" for="rbTerminFreitag">Freitag</label>
                        </div>
                    </div>
                    <div class="col-12 text-center mb-3">
                        <input type="submit" name="btSubmit">
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
            <p>Hier soll entsprechend der Realität einer der folgenden Sätze ausgegeben werden:</p>
            <ul>
                <li>Formular wurde nicht abgeschickt - gähn.</li>
                <li>Formular wurde abgeschickt, aber das Textfeld wurde LEER abgeschickt!!</li>
                <li>Formular wurde abgeschickt, Grund: »Zu spät in den Unterricht gekommen«, Kuchenrezept: Apfelkuchen, Termin: Freitag</li>
            </ul>
            <p>Verwenden Sie dazu die Methoden <code>isSubmitted()</code>, <code>isTfNameEmpty()</code>, <code>getValueOfTfGrund()</code>, <code>getValueOfSelKuchen()</code>, <code>getValueOfRbTermin()</code>. Leider müssen Sie diese Methoden alle in der Formhandler-Klasse schreiben.</p>
            <?php
           
            ?>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>