<?php
include "connect.php";

if(isset($_SESSION["tunnus"]) == false) {
    header ("location: index.php");
    die();
}

if(isset($_POST["id"]) == false) {
    header ("location: index.php");
    die();
}

$oppilas_id = mysqli_real_escape_string($conn, $_POST["id"]);

$sql = "SELECT * FROM oppilaat WHERE id='".$oppilas_id."';";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
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
            <form action="muokkaa_oppilas_action.php" method="POST" class="centered-form">
                <input type='hidden' name='id' value='<?php echo $row["id"]; ?>'>
                <fieldset class="rounded-fieldset">
                    <legend>Omat tiedot</legend>

                    <label for="f_oppilas">Nimi</label><br>
                    <input type="text" id="f_oppilas" name="f_oppilas" value="<?php echo $row["nimi"]; ?>" placeholder="Matti Meikäläinen" required><br>

                    <label for="f_muuta">Lisätietoja</label><br>
                    <input type="text" id="f_muuta" name="f_muuta" value="<?php echo $row["muuta"]; ?>" placeholder="Kokkolan lähellä"><br>
                </fieldset>

                <fieldset class="rounded-fieldset">
                    <legend>Työharjoittelupaikan tiedot</legend>

                    <label for="f_paikka">Harj. Paikka</label><br>
                    <input list="paikat" id="f_paikka" name="f_paikka" value="<?php echo $row["paikka"]; ?>"><br>
                    <datalist id="paikat">
                        <?php
                            include "listapaikat.php";
                        ?>
                    </datalist>

                    <label for="f_ohjaaja">Ohjaaja</label><br>
                    <input type="text" id="f_ohjaaja" name="f_ohjaaja" value="<?php echo $row["ohjaaja"]; ?>"><br>

                    <label for="f_yhteystiedot">Yhteystiedot</label><br>
                    <input type="text" id="f_yhteystiedot" name="f_yhteystiedot" value="<?php echo $row["yhteystiedot"]; ?>"><br>

                    <label for="f_aloitus">Aloitus</label><br>
                    <input type="date" id="f_aloitus" name="f_aloitus" value="<?php echo $row["aloitus"]; ?>" required><br>

                    <label for="f_lopetus">Lopetus</label><br>
                    <input type="date" id="f_lopetus" name="f_lopetus" value="<?php echo $row["lopetus"]; ?>" required><br>
                </fieldset>

                <fieldset class="rounded-fieldset">
                    <legend>Muuta tietoa</legend>
                                        
                    <label for="f_status">Status</label><br>
                    <select id="f_status" name="f_status" required>
                        <option <?php if($row["status"] == "v_valmis") { echo "selected"; } ?> value="v_valmis">Valmis</option>
                        <option <?php if($row["status"] == "v_hakemassa") { echo "selected"; } ?> value="v_hakemassa">Hakemassa paikkaa</option>
                    </select><br>

                    <label for="f_ruokaraha">Ruokarahat</label>
                    <input type="checkbox" id="f_ruokaraha" name="f_ruokaraha" <?php if($row["ruokaraha"] != "off") { echo "checked"; } ?>><br> 
                </fieldset>

                <input class="button-input" type="submit" value="Tallenna">
            </form>
        </section>
    </main>

    <?php include "footer.php"; ?>
</body>
</html>