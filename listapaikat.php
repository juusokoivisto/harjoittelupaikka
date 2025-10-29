<?php
$sql = "SELECT * FROM harjoittelupaikat"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()){
        echo "<option value=".$row["nimi"]."></option>";
    }
} else {
    echo "Yhtään harjoittelupaikkaa ei löytynyt.";
}

$conn->close();
?>