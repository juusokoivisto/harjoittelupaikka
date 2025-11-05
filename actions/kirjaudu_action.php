<?php
include "connect.php";

if (isset(
    $_POST["f_username"], 
    $_POST["f_salasana"]) == false) 
{
    header("location: ./../index.php");    
    die();
}

$username = mysqli_real_escape_string($conn, $_POST["f_username"]);
$salasana = mysqli_real_escape_string($conn, $_POST["f_salasana"]);

$sql = "SELECT * FROM users WHERE username = '".$username."' LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$hashedPwd = $row["password"];

if(password_verify($salasana, $hashedPwd)) {
    $_SESSION["tunnus"] = $row["id"];
    $_SESSION["username"] = $row["username"];
    $_SESSION["teacher"] = $row["teacher"];

    echo "Kirjautuminen onnistui";
    header("location: ./../index.php");

} else {
    echo "Kirjautuminen epäonnistui";
    header("location: ./../kirjaudu.php");
}
?>