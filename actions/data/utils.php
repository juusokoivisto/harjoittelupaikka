<?php
function is_teacher() {

    if (!isset($_SESSION['tunnus'])) {
        return false;
    }

    global $conn;

    $user_id = $_SESSION['tunnus'];

    $stmt = $conn->prepare("SELECT teacher FROM users WHERE id = ?");
    if (!$stmt) {
        return false;
    }

    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($teacher);
    $stmt->fetch();
    $stmt->close();

    // Return true if the user exists and is a teacher
    return ($teacher == 1);
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