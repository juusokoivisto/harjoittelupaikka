<?php
function is_teacher() {
    if(isset($_SESSION["tunnus"], $_SESSION["teacher"]) and $_SESSION["teacher"] == 1) {
        return true;
    }

    return false;
}

function is_logged_in() {
    if(isset($_SESSION["tunnus"], $_SESSION["teacher"])) {
        return true;
    }

    return false;
}

function hae_oppilas_id($id) {
    include "actions/connect.php";

    $sql = "SELECT * FROM oppilaat WHERE id='".$id."';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    return $row;
}
?>