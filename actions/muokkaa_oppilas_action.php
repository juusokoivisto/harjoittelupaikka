<?php
include "connect.php";

if(isset($_POST["id"]) == false or is_teacher() == false) 
{
    header ("location: ./../index.php");
    die();
}

$id =           mysqli_real_escape_string($conn, $_POST["id"]);
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