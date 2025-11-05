<?php
include "connect.php";

if (isset(
    $_POST["f_hp_nimi"], 
    $_POST["f_hp_osoite"], 
    $_POST["f_hp_yhteystiedot"]) == false) 
{
    header("location: ./../index.php");
    die();
}

$nimi = mysqli_real_escape_string($conn, $_POST["f_hp_nimi"]);
$osoite = mysqli_real_escape_string($conn, $_POST["f_hp_osoite"]);
$yhteystiedot = mysqli_real_escape_string($conn, $_POST["f_hp_yhteystiedot"]);

$sql = "INSERT INTO harjoittelupaikat (nimi, osoite, yhteystiedot) 
VALUES ('$nimi', '$osoite', '$yhteystiedot')";

if ($conn->query($sql) === TRUE) {
    echo "Uusi harkkapaikka lisätty järjestelmään";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("location: ./../paikat.php");
?>