<?php


require_once('classes/Formhandler.class.php');
require_once('classes/Dbconnect.class.php');
$f = new Formhandler($_POST);
$dbc = new Dbconnect('personenTest.db', __DIR__); // __DIR__ gibt den Pfad zur aktuellen Datei zurück. Da die Klassen in einem anderen Verzeichnis liegen als die index.php, geben wir der Dbconnect-Klasse den "root"-Pfad (Pfad zum Verzeichnis, wo alle Dateien drinliegen) mit.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>7 - HTML-Formular mit SQLite-Datenbankanbindung</title>
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
            <h1>7 - HTML-Formular mit Datenbankanbindung - Instruktion</h1>
            <p class="lead">Jetzt wird es ernst: Wir hängen eine Datenbank an unser Formular.</p>
        </div>



        <div class="row">
            <p>Wir wollen aus einer Datenbank Daten holen und in sie hineinschreiben. Das alles wird auf dieser Seite hier demonstriert. Das ist viel auf einmal, aber hier kriegen Sie die volle Übersicht.</p>
            <h2>Übersicht: Programmstruktur</h2>
            <ol>
                <li><code>Formhandler.class.php</code> - kümmert sich wie bisher auch um die Verarbeitung des Formulars (testen, ob Felder leer sind; testen, ob Formular abgeschickt wurde; usw.)</li>
                <li><code>Dbconnect.class.php</code> - kümmert sich um die Kommunikation mit der Datenbank. Ihre Aufgabe aktuell ist <strong>nicht</strong>, die Klasse bis ins Detail zu verstehen, sondern sie einfach verwenden zu können.
                    <ol>
                        <li>Der <strong>Konstruktor</strong> erhält als Parameter den Namen der Datenbank (personenTest.db) und legt den Pfad zur Datenbank fest. Außerdem öffnet er die Verbindung zur Datenbank mit der Methode</li>
                        <li><code>db_verbindung_oeffnen(…)</code>. Diese Methode erzeugt vor allem ein neues Objekt der Klasse PDO (»PHP Data Objects«). PDO erlaubt uns den einfachen Zugriff auf SQL-Datenbanken. Dazu benutzen wir das "Handle" <code>$this->verbindung</code>, siehe nächster Punkt.</li>
                        <li>Die Methode <code>readDatabase(…)</code> nimmt ein SQL-Statement entgegen (also bspw. <code>SELECT * FROM personen p;</code>) und gibt ein Objekt mit den Ergebnissen der Abfrage zurück. Dazu wird das <code>verbindung</code>-Objekt verwendet.</li>
                        <li>Analog funktioniert <code>writeDatabase(…)</code> - nur dass hier eine manipulierende Abfrage ausgeführt wird (wie <code>INSERT INTO</code>, <code>UPDATE</code> oder <code>DELETE FROM</code>). Es wird kein Wert zurückgegeben.</li>

                    </ol>
                </li>
                <li>
                    Im Verzeichnis sqliteDatabases liegt eine SQLite-Datenbank. Wir verwenden SQLite (statt bspw. MySQL/MariaDB), weil wir hier keinen laufenden Server brauchen, keine Zugangsdaten usw. Alles viel easier.<br>Diese Datenbank können wir abfragen und verändern. Damit wir jederzeit wieder zurückkönnen, liegt im Verzeichnis auch noch die Originalversion als zip. Wenn man mal was kaputt gemacht hat, wirft man personenTest.db einfach weg und entpackt das Zip-Archiv.
                </li>
            </ol>
            <h2>Test</h2>
            <p>Also, testen wir das alles mal.</p>
            <p>Oben in der index.php haben wir die beiden Klassen <code>Formhandler</code> und <code>Dbconnect</code> bereits importiert und neue Objekte angelegt. Entsprechend sollten ganz oben in dieser Seite Ausgaben erzeugt worden sein.</p>
            <h3>Daten holen</h3>
            <p>Wenn Sie den folgenden Knopf drücken, wird <code>readDatabase("SELECT * FROM personen p;")</code> ausgeführt. Das zurückgegebene Ergebnisobjekt wird mit einer foreach-Schleife iteriert und in Tabellenzellen ausgegeben (siehe Quellcode).</code></p>
            <!-- #### FORMULAR READ START ### -->

            <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
                <input type="submit" name="btSubmitRead" value="Read">
            </form>
            <!-- #### FORMULAR READ ENDE ### -->

            <?php
            // eigentlich wäre es schicker, wenn wir den Code für die Tabelle in der Dbconnect zusammenbauen ließen und dann komplett zurückgeben würden, dann müssten wir uns hier nicht unsere index.php mit php-Code vollmüllen. Aber so ist es erst mal einfacher.
            if (isset($_POST['btSubmitRead'])) {
                $sqlAbfrage     = 'SELECT * FROM personen p;';
                $ergebnismenge  = $dbc->readDatabase($sqlAbfrage);
                // Tabelle aus DB-Daten bauen
                echo "<table class='table'>";
                echo "<thead><tr>";
                echo "<th>id</th><th>Name</th><th>Körpergröße</th>";
                echo "</tr></thead>";
                foreach ($ergebnismenge as $zeile) {
                    echo "<tr>";
                    echo "<td>" . $zeile["id"] . "</td>";
                    echo "<td>" . $zeile["name"] . "</td>";
                    echo "<td>" . $zeile["groesse"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p><small>Read-Knopf wurde nicht gedrückt.</small></p>";
            }
            ?>
            <hr>
            <h3>Daten schreiben</h3>
            <p>Wir fügen einen neuen Datensatz ein. Dazu füllen wir das folgende Formular aus und rufen mit den Daten die <code>Dbconnect</code>-Methode <code>writeDatabase(…)</code> auf:</p>
            <!-- #### FORMULAR WRITE START ### -->
            <div class="row border rounded p-3">

                <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST">
                    <label for="tfName">Dein Name:</label>
                    <input type="text" name="tfName" value="Alfons"> <label for="tfKoerpergroesse">Körpergröße:</label>
                    <input type="number" name="tfKoerpergroesse" value="177">
                    <input type="submit" name="btSubmitInsert" value="Write">
                </form>
            </div>
            <!-- #### FORMULAR WRITE ENDE ### -->
            <?php
            if (isset($_POST['btSubmitInsert'])) {
                // der Knopf name="submitInsert" wurde gedrückt --> Input-Formular wurde abgeschickt
                // (isset: Variable existiert (ist deklariert) UND ist nicht null)

                // Man könnte testen mit:
                // echo "erstes formular wurde abgeschickt!";
                $name     = $_POST['tfName'];
                $groesse  = $_POST['tfKoerpergroesse'];
                $sqlAnweisung = "INSERT INTO `personen` (`name`, `groesse`) VALUES ('$name', '$groesse');";
                $dbc->writeDatabase($sqlAnweisung);
                /* php-if (isset …) ist noch nicht geschlossen!!!
       Da wir das folgende HTML nicht echoen wollen (zu viele "'.'" usw.), schließen wir einfach php, schreiben HTML-Code und nehmen das PHP-Skript dann wieder auf. (Pro-Trick!)
       */
            echo "
            <!-- Dieser HTML-Code wird nur eingefügt, wenn die php-if-Bedingung isset … wahr ist!, also nur, wenn das Formular Input abgeschickt wurde -->
            <div class='row bg-success text-white mt-3'>
                <!-- Bootstrap Color-Klassen: https://getbootstrap.com/docs/4.0/utilities/colors/ -->
                <div class='col-12'>
                    <p class='text-center'>Neuer Datensatz '" .  $_POST['tfName'] ."' eingefügt.</p>
                    <!-- Bootstrap Textausrichtung: https://getbootstrap.com/docs/4.0/utilities/text/ -->
                </div>
            </div>";
            
            } // Ende innerer if-Zweig (isset …)
            ?>
           <h2>Sie fanden das ziemlich viel auf einmal?</h2>
           <p>Verständlich. Aber sagen wir so: Wenn Sie das hier ungefähr gecheckt haben, haben Sie 90% des Themas abgearbeitet. Ist doch gut, oder? Und jetzt kommen ein paar ganz nette, kleine Übungen, da kapieren Sie das bestimmt 👍</p>
        </div>

        <div class="row mt-5">
         
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>