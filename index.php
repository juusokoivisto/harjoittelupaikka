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
    <?php include "header.php"; ?>

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

    <?php include "footer.php"; ?>
</body>
</html>