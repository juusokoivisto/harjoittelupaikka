<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "tyoharjoittelu";

$conn = new mysqli($servername, $username, $password, $database);
$conn->set_charset("utf8mb4");

if ($conn->connect_error) {
    die("Tietokanta virhe: " . $conn->connect_error);
}

echo "Tietokanta yhteys onnistui.";
?>