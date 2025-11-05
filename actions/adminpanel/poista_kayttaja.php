<?php
include "./../connect.php";
include "./../data/utils.php";

if(is_teacher() == false)
{
    echo "Ei oikeuksia.";
    return;
}

$id = $_POST["user"];

$stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Käyttäjä on poistettu";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
?>