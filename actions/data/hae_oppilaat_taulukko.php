<?php
$sql = "SELECT * FROM oppilaat"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()){
        $ruokaraha = $row["ruokaraha"] == "off" ? "Ei makseta" : "Maksetaan";
        $status = $row["status"] == "v_hakemassa" ? "Hakemassa" : "Saanut paikan";

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

        if (isset($_SESSION["tunnus"], $_SESSION["tunnus"]) and $_SESSION["teacher"] == 1) {
            echo "<td><form action='muokkaa_oppilas.php' method='post'>";
            echo "<input type='submit' value='Muokkaa'>";
            echo "<input type='hidden' name='id' value='".$row["id"]."'>";
            echo "</form>";
    
            echo "<form action='actions/poista_oppilas_action.php' method='post'>";
            echo "<input type='submit' value='Poista'>";
            echo "<input type='hidden' name='id' value='".$row["id"]."'>";
            echo "</form></td>";
        }

        echo "</tr>";
    }
} else {
    echo "Yhtään oppilasta ei löytynyt.";
}

$conn->close();
?>