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
    <div class="page-content">
    <nav>
        <a href="./index.php">Etusivu</a> |
        <a href="./kirjautuminen.php">Kirjaudu sisään</a> |
        <a href="./harjoittelupaikat.php">Harjoittelupaikat</a> |
        <a href="./lisaa_harjoittelupaikka.php">Lisää harjoittelupaikka</a> |
        <a href="#footer">Tekijät</a>
    </nav>
    </header>
    <main>
        <h1>Lisää oppilas</h1>
        <div class="main2">
        <form method="POST" action="actionpage.php">
        <fieldset class="lisaa_oppilas_fieldset">    
            <fieldset>
                <label for="oppilas">Oppilas:</label><br>
                <input type="text" name="nimi" id="f_nimi" placeholder="Nimi..." required><br>
                <label for="lisatietoa">Lisätietoa:</label><br>
                <input type="text" name="lisatietoa" id="f_lisatietoa" placeholder="Lisätietoa...">
            </fieldset>
            <br>
            <fieldset>
                <label for="tyo">Harkkapaikka:</label><br>
                <input list="paikat" id="f_paikka" name="harkkapaikka" placeholder="Harjoittelupaikan nimi..."/><br>
                <datalist id="paikat">
                    <?php
                        include "listapaikat.php";
                    ?>
                </datalist>
                <label for="tyo">Ohjaaja:</label><br>
                <input type="text" name="ohjaaja" id="f_ohjaaja" placeholder="Ohjaajan nimi..."><br>
                <label for="tyo">Yhteystiedot:</label><br>
                <input type="text" name="yhteystiedot" id="f_yhteystiedot" placeholder="Ohjaajan yhteystiedot..."><br>
            </fieldset>    
            <br>
            <fieldset class="testi">
                <label for="alkaa">Alkaa:</label><br>
                <input type="date" name="alkaa" id="f_alkaa" required><br>
                <label for="loppuu">Loppuu:</label><br>
                <input type="date" name="loppuu" id="f_loppuu" required><br>
            </fieldset>    
            <br>
            <fieldset class="testi">
                <label for="status">Status:</label><br>
                <select id="f_status" name="status">
                    <option value="Ei paikkaa">Ei paikkaa</option>
                    <option value="Etsii paikkaa">Etsii paikkaa</option>
                    <option value="Paikka löytynyt">Paikka löytynyt</option>
                </select><br>

                <label for="ruokaraha">Ruokaraha:</label><br>
                <select id="f_ruokaraha" name="ruokaraha">
                    <option value="Ei">Ei</option>
                    <option value="Kyllä">Kyllä</option>
                </select><br>
            </fieldset><br>
            <input class="button" type="submit" value="Lisää">
        </fieldset>        
        </form>
    </div>
    </main>
    </div>
    <footer id="footer">
        <h3 class="footer-text">Tekijät</h3>
        <p class="footer-text">Eetu Kiljala</p>
        <p class="footer-text">Nico Pasanen</p>
        <p class="footer-text">Juuso Koivisto</p>
    </footer>
</body>
</html>