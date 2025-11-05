<?php
$sql = "SELECT * FROM harjoittelupaikat"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($paikka_row = $result->fetch_assoc()){
        echo "<option value='".$paikka_row["nimi"]."'></option>";
    }
}

$conn->close();
?>