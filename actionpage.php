<?php

include "connect.php";

$nimi = $_POST["f_oppilas"];
$paikka = $_POST["f_paikka"];
$ohjaaja = $_POST["f_ohjaaja"];
$yhteystiedot = $_POST["f_yhteystiedot"];
$status = $_POST["f_status"];
$aloitus = $_POST["f_aloitus"];
$lopetus = $_POST["f_lopetus"];
$muuta = $_POST["f_muuta"];

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

header("location: ./index.php");
?>