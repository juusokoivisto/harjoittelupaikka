<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harkkapaikka</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
                <a href="./index.php">Etusivu</a>
                <a href="./kirjautuminen.php">Kirjaudu sisään</a>
                <a href="./lisaa_oppilas.php">Lisää oppilas</a>
                <a href="./lisaa_harjoittelupaikka.php">Lisää harjoittelupaikka</a>
                <a href="#footer">Tekijät</a>
        </nav>
    </header>
    <main>
        <h1>Harjoittelupaikat</h1>
        <div class="centered-table2">
            <table class="overflow-table">
                <thead>
                    <tr>
                        <th class="sticky-element">Yrityksen nimi</th>
                        <th>Osoite</th>
                        <th>Yhteystiedot</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "yritykset.php";
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <br>
    <br>
    <footer id="footer">
        <h3 class="footer-text">Tekijät</h3>
        <p class="footer-text">Eetu Kiljala</p>
        <p class="footer-text">Nico Pasanen</p>
        <p class="footer-text">Juuso Koivisto</p>
    </footer>
</body>
</html>