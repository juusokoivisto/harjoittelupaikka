<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Harkkapaikka</title>
</head>
<body>
    <header>
        <h1>Harkkapaikka</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#harkkapaikka">Harjoittelu Paikat</a></li>
            <li><a href="#kirjaudu">Kirjaudu Sisään</a></li>
        </ul>   
    </nav>

    <main>
        <section id="harkkapaikka">
            <h2>Harjoitus Paikat</h2>  
            <div class="centered-table">
                <table class="overflow-table">
                    <thead>
                        <tr>
                            <th class="sticky-element">Oppilas</th>
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