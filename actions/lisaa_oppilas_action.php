<?php
include "connect.php";

if (isset(
    $_POST["f_oppilas"],
    $_POST["f_paikka"],
    $_POST["f_ohjaaja"],
    $_POST["f_yhteystiedot"],
    $_POST["f_status"],
    $_POST["f_aloitus"],
    $_POST["f_lopetus"],
    $_POST["f_muuta"]) == false) 
{
    header("location: ./../index.php");
    die();
}

if(is_teacher() == false) 
{
    header ("location: ./../index.php");
    die();
}

$nimi =         mysqli_real_escape_string($conn, $_POST["f_oppilas"]);
$paikka =       mysqli_real_escape_string($conn, $_POST["f_paikka"]);
$ohjaaja =      mysqli_real_escape_string($conn, $_POST["f_ohjaaja"]);
$yhteystiedot = mysqli_real_escape_string($conn, $_POST["f_yhteystiedot"]);
$status =       mysqli_real_escape_string($conn, $_POST["f_status"]);
$aloitus =      mysqli_real_escape_string($conn, $_POST["f_aloitus"]);
$lopetus =      mysqli_real_escape_string($conn, $_POST["f_lopetus"]);
$muuta =        mysqli_real_escape_string($conn, $_POST["f_muuta"]);

$ruokaraha = "off";
if (!empty($_POST["f_ruokaraha"])) {
    $ruokaraha = $_POST["f_ruokaraha"];
}

$sql = "INSERT INTO oppilaat (nimi, paikka, ohjaaja, yhteystiedot, aloitus, lopetus, status, ruokaraha, muuta) 
VALUES ('$nimi', '$paikka', '$ohjaaja', '$yhteystiedot', '$aloitus', '$lopetus','$status', '$ruokaraha', '$muuta')";

if ($conn->query($sql) === TRUE) {
    echo "Uusi oppilas lisätty järjestelmään";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("location: ./../index.php");
?>