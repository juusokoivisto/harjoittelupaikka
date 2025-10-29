<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Kirjaudu sisään</title>
</head>
<body>
    <header>
        <h1>Kirjaudu sisään</h1>
    </header>

    <nav>
        <ul>
            <li><a href="./index.php">Harjoittelu Paikat</a></li>
            <li><a href="./kirjaudu.php">Kirjaudu Sisään</a></li>
            <li><a href="./lisaa-oppilas.php">Lisää Oppilas</a></li>
        </ul>   
    </nav>

    <main>
        <section>
            <form action="actionpage.php" method="POST" class="centered-form">
                <fieldset>
                    <legend>Kirjaudu sisään</legend>

                    <label for="f_username">Käyttäjänimi</label><br>
                    <input type="text" id="f_username" name="f_username" required><br>

                    <label for="f_salasana">Salasana</label><br>
                    <input type="password" id="f_salasana" name="f_salasana" required><br>
                </fieldset>
                <br>
                <input type="submit" value="Kirjaudu">
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