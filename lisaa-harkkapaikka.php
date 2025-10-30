<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Lisää harjoittelupaikka</title>
</head>
<body>
    <header>
        <nav>
            <ul class="horizontal-nav">
                <li><a href="./index.php">Haetut paikat</a></li>
                <li><a href="./paikat.php">Harjoittelu paikat</a></li>
                <li><a href="./kirjaudu.php">Kirjaudu Sisään</a></li>
                <li><a href="./lisaa-oppilas.php">Lisää Oppilas</a></li>
                <li><a href="./lisaa-harkkapaikka.php">Lisää Harjoittelupaikka</a></li>
            </ul>   
        </nav>
        <h1>Harjoittelupaikat</h1>
    </header>

    <main>       
        <section>
            <form action="actionpage.php" method="POST" class="centered-form">
                <fieldset class="rounded-fieldset">
                    <legend>Työharjoittelupaikan tiedot</legend>

                    <label for="f_hp_nimi">Paikan nimi</label><br>
                    <input type="text" id="f_hp_nimi" name="f_hp_nimi" required><br>

                    <label for="f_hp_yhteystiedot">Yhteystiedot</label><br>
                    <input type="text" id="f_hp_yhteystiedot" name="f_hp_yhteystiedot" required><br>

                    <label for="f_hp_osoite">Osoite</label><br>
                    <input type="text" id="f_hp_osoite" name="f_hp_osoite" required><br>
                </fieldset>
                <input type="submit" value="Lisää">
            </form>
        </section>
    </main>

    <footer>
        <p class="footer-text">Tekijä: 
            <a href="mailto:juuso.koivisto@student.kpedu.fi">
                Juuso Koivisto
            </a>
        </p>
    </footer>
</body>
</html>