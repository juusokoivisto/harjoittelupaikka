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
    <script src="js/hallintapaneeli.js"></script> 
    <title>Harkkapaikka</title>
</head>
<body>
    <?php include "header.php"; ?>

    <main>
        <section id="harkkapaikka">
            <h2>Hallintapaneeli</h2>  
            <div class="align-center-horizontal">
                <div class="admin-panel-div">
                    <?php
                        include "actions/data/hae_oppilaat_hallintapaneeli.php";
                    ?>
                </div>
            </div>
        </section>
    </main>

    <?php include "footer.php"; ?>
</body>
</html>