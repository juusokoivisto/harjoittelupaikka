<?php

$sql = "SELECT * FROM users"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($oppilas_row = $result->fetch_assoc()){
        $nimi = $oppilas_row["username"];  
        $id = $oppilas_row["id"];   
        $onko_opettaja = $oppilas_row["teacher"];   

        echo "<div class='admin-panel-child'>";
        echo    "<span>".$nimi."</span>";
        echo    "<select class='role-select' data-user='".$id."' id='options'>";
        echo        "<option ". ($onko_opettaja == 0 ? "selected" : "") ." value='0'>Oppilas</option>";
        echo        "<option ". ($onko_opettaja == 1 ? "selected" : "") ." value='1'>Opettaja</option>";
        echo    "</select>";   
        echo    "<button type='button' data-user='".$id."' class='reset-btn'>Vaihda salasana</button>";
        echo    "<button type='button' data-user='".$id."' class='delete-btn'>Poista käyttäjä</button>";
        echo "</div>";
    }
}
?>