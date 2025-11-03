<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Kirjaudu sisään</title>
</head>
<body>
    <?php include "header.php"; ?>

    <main>
        <section>
            <form action="actionpage.php" method="POST" class="centered-form">
                <fieldset class="rounded-fieldset">
                    <legend>Kirjaudu sisään</legend>

                    <label for="f_username">Käyttäjänimi</label><br>
                    <input type="text" id="f_username" name="f_username" required><br>

                    <label for="f_salasana">Salasana</label><br>
                    <input type="password" id="f_salasana" name="f_salasana" required><br>
                </fieldset>
                <input type="submit" value="Kirjaudu">
            </form>
        </section>
    </main>

    <?php include "footer.php"; ?>
</body>
</html>