<?php

include "connect.php";

if (isset($_POST['nimi'])) {

$nimi =             $_POST['nimi'];
$osoite =           $_POST['osoite'];
$yhteystiedot =     $_POST['yhteystiedot'];

$sql = "INSERT INTO harjoittelupaikat (nimi, osoite, yhteystiedot) VALUES
('$nimi', '$osoite', '$yhteystiedot')";

if ($conn->query($sql) === TRUE) {
    echo "Uusi yritys lisätty järjestelmään";
    
    echo '<script>';
    echo 'location.replace("harjoittelupaikat.php")';
    echo '</script>';

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>