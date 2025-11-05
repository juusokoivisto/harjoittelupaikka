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
    <title>Rekisteröidy</title>
</head>
<body>
    <?php include "header.php"; ?>

    <main>
        <section>            
            <h2>Rekisteröidy</h2>  
            <form action="actions/register_action.php" method="POST" class="centered-form">
                <fieldset class="rounded-fieldset">
                    <legend>Rekisteröidy</legend>

                    <label for="f_username">Käyttäjänimi</label><br>
                    <input type="text" id="f_username" name="f_username" required><br>

                    <label for="f_salasana">Salasana</label><br>
                    <input type="password" id="f_salasana" name="f_salasana" required><br>
                </fieldset>
                <p>Jos sinulla on käyttäjä, <a href="kirjaudu.php">kirjaudu sisään.</a></p>
                <input type="submit" value="Rekisteröidy">
            </form>
        </section>
    </main>

    <?php include "footer.php"; ?>
</body>
</html>