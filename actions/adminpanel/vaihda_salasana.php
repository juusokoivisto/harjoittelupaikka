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
$uusi_salasana = $_POST["new_password"];

$newHashedPwd = password_hash($uusi_salasana, PASSWORD_DEFAULT);

$stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
$stmt->bind_param("si", $newHashedPwd, $id);

if ($stmt->execute()) {
    echo "Käyttäjän salasana on muokattu";
} else {
    echo "Error: " . $stmt->error;
}
?>