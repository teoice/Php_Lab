<?php
$array = array("Inglese" => 7, "Storia" => 8, "Informatica" => 7, "Matematica" => 6, "Sistemi&Reti" => 7, "TPSIT" => 8, "Italiano" => 8, "Educazione Civica" => 9);
?>

<html>
    <head>
        <title>Prova Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Prova Form PHP</h1>

        <form action="welcome.php" class="form" method="post">
            <label for="montante">Montante: </label><br>
            <input type="number" name="montante"><br>

            <label for="taeg">TAEG: </label><br>
            <input type="number" name="taeg"><br>

            <label for="mesi">Mesi: </label><br>
            <input type="number" name="mesi"><br>
            <button>Invia</button>
        </form>
    </body>
</html>