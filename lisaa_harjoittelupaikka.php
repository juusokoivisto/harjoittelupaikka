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
            <a href="./index.php">Etusivu</a> |
            <a href="./kirjautuminen.php">Kirjaudu sisään</a> |
            <a href="./lisaa_oppilas.php">Lisää oppilas</a> |
            <a href="./harjoittelupaikat.php">Harjoittelupaikat</a> |
            <a href="#footer">Tekijät</a>
        </nav>
    </header>
    <main>
        <h1>Lisää harjoittelupaikka</h1>
        <div class="main2">
        <form method="POST" action="actionpage2.php">
            <br>
            <fieldset class="harjpaikka_fieldset">
                <h3>Tiedot</h3>
                <label for="yritys">Yrityksen nimi:</label><br>
                <input type="text" name="nimi" id="f_nimi" placeholder="Yrityksen nimi..." required><br><br>

                <label for="osoite">Osoite:</label><br>
                <input type="text" name="osoite" id="f_osoite" placeholder="Yrityksen osoite..." required><br><br>

                <label for="yhteystiedot">Yhteystiedot:</label><br>
                <input type="text" name="yhteystiedot" id="f_yhteystiedot" placeholder="Yrityksen yhteystiedot..."><br><br>

                <input class="button" type="submit" value="Lisää">
            </fieldset>    
        </form>
    </div>
    </main>
    <footer id="footer">
        <h3 class="footer-text">Tekijät</h3>
        <p class="footer-text">Eetu Kiljala</p>
        <p class="footer-text">Nico Pasanen</p>
        <p class="footer-text">Juuso Koivisto</p>
    </footer>
</body>
</html>