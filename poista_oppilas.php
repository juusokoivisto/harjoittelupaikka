<?php
include "connect.php";

if(isset($_SESSION["tunnus"]) == false) {
    header ("location: index.php");
    die();
}

$oppilas_id = mysqli_real_escape_string($conn, $_POST["id"]);

$sql = "DELETE FROM oppilaat WHERE id='".$oppilas_id."';";
if ($conn->query($sql) === TRUE) {
    echo "Oppilas poistettu järjestelmästä";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("location: index.php");
?>