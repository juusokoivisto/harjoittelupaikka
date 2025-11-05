<?php
include "connect.php";

if(isset(
    $_SESSION["tunnus"], 
    $_SESSION["teacher"],
    $_POST["id"]) == false) 
{
    header ("location: ./../index.php");
    die();
}

$id = $_POST["id"];

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

$sql = "UPDATE oppilaat
        SET nimi = '$nimi', paikka = '$paikka', ohjaaja = '$ohjaaja', 
            yhteystiedot = '$yhteystiedot', status = '$status', 
            aloitus = '$aloitus', lopetus = '$lopetus', muuta = '$muuta', ruokaraha = '$ruokaraha'
        WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result === TRUE) {
    echo "Oppilas on muokattu";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("location: ./../index.php");
?>