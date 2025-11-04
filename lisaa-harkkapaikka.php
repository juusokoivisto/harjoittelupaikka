<?php
include "connect.php";

if(isset($_SESSION["tunnus"]) == false) {
    header ("location: index.php");
    die();
}
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
    <title>Lisää harjoittelupaikka</title>
</head>
<body>
    <?php include "header.php"; ?>

    <main>       
        <section>
            <h2>Lisää harjoittelupaikka</h2>  
            <form action="actionpage.php" method="POST" class="centered-form">
                <fieldset class="rounded-fieldset">
                    <legend>Työharjoittelupaikan tiedot</legend>

                    <label for="f_hp_nimi">Paikan nimi</label><br>
                    <input type="text" id="f_hp_nimi" name="f_hp_nimi" required><br>

                    <label for="f_hp_yhteystiedot">Yhteystiedot</label><br>
                    <input type="text" id="f_hp_yhteystiedot" name="f_hp_yhteystiedot" required><br>

                    <label for="f_hp_osoite">Osoite</label><br>
                    <input type="text" id="f_hp_osoite" name="f_hp_osoite" required><br>
                </fieldset>
                <input type="submit" value="Lisää">
            </form>
        </section>
    </main>

    <?php include "footer.php"; ?>
</body>
</html>