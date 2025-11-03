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
        
            <a href="./kirjautuminen.php">Kirjaudu sisään</a> |
            <a href="./lisaa_oppilas.php">Lisää oppilas</a> |
            <a href="./harjoittelupaikat.php">Harjoittelupaikat</a> |
            <a href="./lisaa_harjoittelupaikka.php">Lisää harjoittelupaikka</a> |
            <a href="#footer">Tekijät</a>
        
    </nav>
        
    </header>
    <main>
        <div class="welcome">
                <?php
                include "connect.php";
                if (isset($_SESSION['tunnus'])) {
                    echo "Tervetuloa <b>" . $_SESSION['tunnus'] . "<br>";
                }
                ?>
        </div>
    <section>    
        <h1 class="etusivu">Etusivu</h1>
        <div class="centered-table">
            <table class="overflow-table">
                <thead>
                    <tr>
                        <th class="sticky-element">Oppilas</th>
                        <th>Harkkapaikka</th>
                        <th>Ohjaaja</th>
                        <th>Yhteystiedot</th>
                        <th>Harjoittelu alkaa</th>
                        <th>Harjoittelu loppuu</th>
                        <th>Status</th>
                        <th>Ruokaraha</th>
                        <th>Lisätietoa</th>
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
    <br>
    <footer id="footer">
        <h3 class="footer-text">Tekijät</h3>
        <p class="footer-text">Eetu Kiljala</p>
        <p class="footer-text">Nico Pasanen</p>
        <p class="footer-text">Juuso Koivisto</p>
    </footer>
</body>
</html>