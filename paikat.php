<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Harjoittelupaikat</title>
</head>
<body>
    <header>
        <h1>Harjoittelupaikat</h1>
    </header>

    <nav>
        <ul>
            <li><a href="./index.php">Haetut paikat</a></li>
            <li><a href="./paikat.php">Harjoittelu paikat</a></li>
            <li><a href="./kirjaudu.php">Kirjaudu Sisään</a></li>
            <li><a href="./lisaa-oppilas.php">Lisää Oppilas</a></li>
            <li><a href="./lisaa-harkkapaikka.php">Lisää Harjoittelupaikka</a></li>
        </ul>   
    </nav>
    
    <main>       
        <section>
            <div class="centered-table">
                <table class="overflow-table">
                    <thead>
                        <tr>
                            <th class="sticky-element">Nimi</th>
                            <th>Osoite</th>
                            <th>Yhteystiedot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "harkkapaikat.php";
                        ?>
                    </tbody>
                </table>
            </div>
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