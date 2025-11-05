<?php
include "actions/connect.php";
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
    <title>Harjoittelupaikat</title>
</head>
<body>
    <?php include "header.php"; ?>
    
    <main>       
        <section>
            <h2>Harjoittelupaikat</h2>  
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
                            include "actions/data/hae_harkkapaikat.php";
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <?php include "footer.php"; ?>
</body>
</html>