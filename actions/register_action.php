<?php
include "connect.php";

if (isset($_POST["f_username"]) == false or 
    isset($_POST["f_salasana"]) == false) 
{
    header("location: ./../index.php");
    die();
}

$username = mysqli_real_escape_string($conn, $_POST["f_username"]);
$password = mysqli_real_escape_string($conn, $_POST["f_salasana"]);

$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password, teacher) 
VALUES ('$username', '$hashedPwd', '0')";

if ($conn->query($sql) === TRUE) {
    echo "Uusi käyttäjä on rekisteröidy!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("location: ./../kirjaudu.php");
?>