<?php

$sql = "SELECT * FROM harjoittelupaikat";
$result = $conn->query($sql);

if($result->num_rows >0) {
    while($row = $result->fetch_assoc()) {
    
    echo "<tr>";
                 echo "<td class='sticky-element'>". $row['nimi'] ."</td>";
                 echo "<td>". $row['osoite'] ."</td>";
                 echo "<td>". $row['yhteystiedot'] ."</td>";
            echo "</tr>";
    }
} else {
    echo "Yhtään oppilasta ei löytynyt";
}
$conn->close();


?>