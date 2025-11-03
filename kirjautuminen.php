<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirjautuminen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
        <a href="./index.php">Etusivu</a> |
        <a href="./lisaa_oppilas.php">Lisää oppilas</a> |
        <a href="./harjoittelupaikat.php">Harjoittelupaikat</a> |
        <a href="./lisaa_harjoittelupaikka.php">Lisää harjoittelupaikka</a> |
        <a href="#footer">Tekijät</a>
        </nav>
    </header>
    <main>
        <h1>Kirjautuminen</h1>
        <div class="main2">
        <form method="POST" action="actionpage.php">
            <fieldset class="harjpaikka_fieldset">
                <h3>Kirjaudu sisään</h3>
                <label for="tunnus">Käyttäjätunnus:</label><br>
                <input type="text" name="tunnus" id="tunnus" placeholder="Käyttäjätunnus..." required><br><br>

                <label for="salasana">Salasana:</label><br>
                <input type="password" name="salasana" id="salasana" placeholder="Salasana..." required><br><br>

                <input class="button" type="submit" value="Kirjaudu">
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