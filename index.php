<?php
include "actions/connect.php";
include "actions/data/utils.php";
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script type="text/javascript" src="js/search.js"></script>
    <title>Harkkapaikka</title>
</head>
<body>
    <?php include "header.php"; ?>

    <main>
        <section id="harkkapaikka">
            <h2>Oppilaiden harjoittelupaikat</h2>  
            <input class="horizontal-center" type="text" id="myInput" onkeyup="searchFunction()" placeholder="Hae..">
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
                            <?php if(is_teacher()): ?>
                                <th>Toiminnot</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "actions/data/hae_oppilaat_taulukko.php";
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <?php include "footer.php"; ?>
</body>
</html>