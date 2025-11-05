<?php
include "./../connect.php";
include "./../data/utils.php";

if(is_teacher() == false)
{
    http_response_code(403);
    echo json_encode([
        "success" => false,
        "error" => "Ei oikeuksia."
    ]);
    exit;
}

$id = $_POST["user"];
$uusi_rooli = $_POST["role"];

$stmt = $conn->prepare("UPDATE users SET teacher = ? WHERE id = ?");
$stmt->bind_param("si", $uusi_rooli, $id);

if ($stmt->execute()) {
    echo "Käyttäjä on muokattu";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
?>