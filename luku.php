<?php
include "connect.php";

$sql = "SELECT * FROM oppilaat"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td class='sticky-element'>" . ($row["nimi"] == NULL ? "-" : $row["nimi"]) . "</td>";
        echo "<td>" . ($row["paikka"] == NULL ? "-" : $row["paikka"]) . "</td>";
        echo "<td>" . ($row["ohjaaja"] == NULL ? "-" : $row["ohjaaja"]) . "</td>";
        echo "<td>" . ($row["yhteystiedot"] == NULL ? "-" : $row["yhteystiedot"]) . "</td>";
        echo "<td>" . ($row["status"] == NULL ? "-" : $row["status"]) . "</td>";
        echo "<td>" . ($row["aloitus"] == NULL ? "-" : $row["aloitus"]) . "</td>";
        echo "<td>" . ($row["lopetus"] == NULL ? "-" : $row["lopetus"]) . "</td>";
        echo "<td>" . ($row["ruokaraha"] == NULL ? "-" : $row["ruokaraha"]) . "</td>";
        echo "<td>" . ($row["muuta"] == NULL ? "-" : $row["muuta"]) . "</td>";
        echo "</tr>";
    }
} else {
    echo "Yhtään oppilasta ei löytynyt.";
}

$conn->close();
?>