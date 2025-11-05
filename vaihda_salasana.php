<?php
include "actions/connect.php";
include "actions/data/utils.php";

$id = $_GET["id"];
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
    <script type="text/javascript" src="js/validate_pwd.js"></script>
    <script type="text/javascript" src="js/vaihda_salasana.js"></script> 
    <title>Vaihda salasana</title>
</head>
<body>
    <?php include "header.php"; ?>

    <main>
        <section>
            <h2>Vaihda salasana</h2>  
            <form action="actions/adminpanel/vaihda_salasana.php" method="POST" class="centered-form">
                <input type='hidden' name='id' value='<?php echo $id; ?>'>
                <fieldset class="rounded-fieldset">
                    <legend>Vaihda salasana</legend>

                    <label for="new_password">Uusi salasana</label><br>
                    <input type="password" id="new_password" name="new_password" required><br>
                </fieldset>
                <input class="button-input" type="submit" value="Vaihda salasana">
            </form>
        </section>
    </main>

    <?php include "footer.php"; ?>
</body>
</html>