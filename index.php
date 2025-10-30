<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Harkkapaikka</title>
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
        <section id="harkkapaikka">
            <h2>Harjoitus Paikat</h2>  
            <div class="centered-table">
                <table class="overflow-table">
                    <thead>
                        <tr>
                            <th class="sticky-element">Nimi</th>
                            <th>Harj. Paikka</th>
                            <th>Ohjaaja</th>
                            <th>Yhteystiedot</th>
                            <th>Status</th>
                            <th>Aloitus</th>
                            <th>Lopetus</th>
                            <th>Ruokarahat</th>
                            <th>Lisätietoja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "luku.php";
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