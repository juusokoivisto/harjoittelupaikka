<?php

include "connect.php";

if (isset($_POST['nimi'])) {

$nimi =             $_POST['nimi'];
$harkkapaikka =     $_POST['harkkapaikka'];
$ohjaaja =          $_POST['ohjaaja'];
$yhteystiedot =     $_POST['yhteystiedot'];
$status =           $_POST['status'];
$alkaa =            $_POST['alkaa'];
$loppuu =           $_POST['loppuu'];
$ruokaraha =        $_POST['ruokaraha'];
$lisatietoa =       $_POST['lisatietoa'];

$sql = "INSERT INTO oppilaat (oppilas, harkkapaikka, ohjaaja, yhteystiedot, status, aloitus, lopetus, ruokaraha, muuta) VALUES
('$nimi', '$harkkapaikka', '$ohjaaja', '$yhteystiedot', '$status', '$alkaa', '$loppuu', '$ruokaraha', '$lisatietoa')";

if ($conn->query($sql) === TRUE) {
    echo "Uusi oppilas lisätty järjestelmään";
    
    echo '<script>';
    echo 'location.replace("index.php")';
    echo '</script>';

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}


if (isset($_POST['tunnus'])) {

    $tunnus = mysqli_real_escape_string($conn,$_POST['tunnus'] );
    $salasana = mysqli_real_escape_string($conn,$_POST['salasana']);

if ($tunnus == NULL OR $salasana == NULL) {
    header("location:kirjautuminen.php");
} else {
    $sql= "SELECT * FROM users WHERE username ='".$tunnus."' LIMIT 1";
    $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $hashedPwd = $row['password'];
        if(password_verify($salasana, $hashedPwd)) {

            mysqli_query($conn, $sql);
            $_SESSION["tunnus"] = $tunnus;
            header ("location:index.php");
            echo "Kirjautuminen onnistui";
        } else {
            echo "Kirjautuminen epäonnistui";
            exit();
        }
}


}


?>