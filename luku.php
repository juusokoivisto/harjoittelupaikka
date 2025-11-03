<?php

$sql = "SELECT * FROM oppilaat";
$result = $conn->query($sql);

if($result->num_rows >0) {
    while($row = $result->fetch_assoc()) {
    
    echo "<tr>";
                 echo "<td class='sticky-element'>". $row['oppilas'] ."</td>";
                 echo "<td>". $row['harkkapaikka'] ."</td>";
                 echo "<td>". $row['ohjaaja'] ."</td>";
                 echo "<td>". $row['yhteystiedot'] ."</td>";
                 echo "<td>". $row['aloitus'] ."</td>";
                 echo "<td>". $row['lopetus'] ."</td>";
                 echo "<td>". $row['status'] ."</td>";
                 echo "<td>". $row['ruokaraha'] ."</td>";
                 echo "<td>". $row['muuta'] ."</td>";
            echo "</tr>";
    }
} else {
    echo "Yhtään oppilasta ei löytynyt";
}
$conn->close();


?>