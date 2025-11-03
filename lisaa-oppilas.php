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
    <title>Lisää oppilas</title>
</head>
<body>
    <?php include "header.php"; ?>

    <main>       
        <section>
            <form action="actionpage.php" method="POST" class="centered-form">
                <fieldset class="rounded-fieldset">
                    <legend>Omat tiedot</legend>

                    <label for="f_oppilas">Nimi</label><br>
                    <input type="text" id="f_oppilas" name="f_oppilas" placeholder="Matti Meikäläinen" required><br>

                    <label for="f_muuta">Lisätietoja</label><br>
                    <input type="text" id="f_muuta" name="f_muuta" placeholder="Kokkolan lähellä"><br>
                </fieldset>

                <fieldset class="rounded-fieldset">
                    <legend>Työharjoittelupaikan tiedot</legend>
                    
                    <label for="f_paikka">Harj. Paikka</label><br>
                    <input list="paikat" id="f_paikka" name="f_paikka"/><br>
                    <datalist id="paikat">
                        <?php
                            include "listapaikat.php";
                        ?>
                    </datalist>

                    <label for="f_ohjaaja">Ohjaaja</label><br>
                    <input type="text" id="f_ohjaaja" name="f_ohjaaja"><br>

                    <label for="f_yhteystiedot">Yhteystiedot</label><br>
                    <input type="text" id="f_yhteystiedot" name="f_yhteystiedot"><br>

                    <label for="f_aloitus">Aloitus</label><br>
                    <input type="date" id="f_aloitus" name="f_aloitus" required><br>

                    <label for="f_lopetus">Lopetus</label><br>
                    <input type="date" id="f_lopetus" name="f_lopetus" required><br>
                </fieldset>

                <fieldset class="rounded-fieldset">
                    <legend>Muuta tietoa</legend>
                                        
                    <label for="f_status">Status</label><br>
                    <select id="f_status" name="f_status" required>
                        <option value="v_valmis">Valmis</option>
                        <option value="v_hakemassa">Hakemassa paikkaa</option>
                    </select><br>

                    <label for="f_ruokaraha">Ruokarahat</label>
                    <input type="checkbox" id="f_ruokaraha" name="f_ruokaraha"><br> 
                </fieldset>
                <input class="button-input" type="submit" value="Lisää">
            </form>
        </section>
    </main>

    <?php include "footer.php"; ?>
</body>
</html>