<?php
$sql = "SELECT * FROM oppilaat"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()){
        $ruokaraha = ($row["ruokaraha"] == "off" ? "Ei makseta" : "Maksetaan");
        $status = ($row["status"] == "v_hakemassa" ? "Hakemassa" : "Saanut paikan");

        echo "<tr>";
        echo "<td class='sticky-element'>" . ($row["nimi"] ?: "-") . "</td>";
        echo "<td>" . ($row["paikka"] ?: "-") . "</td>";
        echo "<td>" . ($row["ohjaaja"] ?: "-") . "</td>";
        echo "<td>" . ($row["yhteystiedot"] ?: "-") . "</td>";
        echo "<td>" . $status . "</td>";
        echo "<td>" . ($row["aloitus"] ?: "-") . "</td>";
        echo "<td>" . ($row["lopetus"] ?: "-") . "</td>";
        echo "<td>" . $ruokaraha . "</td>";
        echo "<td>" . ($row["muuta"] ?: "-") . "</td>";
        echo "</tr>";
    }
} else {
    echo "Yhtään oppilasta ei löytynyt.";
}

$conn->close();
?>