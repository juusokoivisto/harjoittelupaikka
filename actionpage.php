<?php
include "connect.php";

if (isset($_POST["f_oppilas"])) {
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
    
    header("location: index.php");
} else if (isset($_POST["f_username"])) {
    $username = mysqli_real_escape_string($conn, $_POST["f_username"]);
    $salasana = mysqli_real_escape_string($conn, $_POST["f_salasana"]);

    if ($username == NULL or $salasana == NULL) {
        header("location: kirjaudu.php");
    }

    $sql = "SELECT * FROM users WHERE username = '".$username."' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $hashedPwd = $row["password"];
    if(password_verify($salasana, $hashedPwd)) {
        $_SESSION["tunnus"] = $username;
        header("location: index.php");
        echo "Kirjautuminen onnistui";
    } else {
        echo "Kirjautuminen epäonnistui";
        exit();
    }
}   
?>