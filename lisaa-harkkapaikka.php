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
    <title>Lisää harjoittelupaikka</title>
</head>
<body>
    <?php include "header.php"; ?>

    <main>       
        <section>
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