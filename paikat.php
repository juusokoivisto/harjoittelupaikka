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
    <?php include "header.php"; ?>
    
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

    <?php include "footer.php"; ?>
</body>
</html>