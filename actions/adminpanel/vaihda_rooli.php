<?php
include "./../connect.php";
include "./../data/utils.php";

if(is_teacher() == false)
{
    echo "Ei oikeuksia.";
    return;
}

$id = $_POST["user"];
$uusi_rooli = $_POST["role"];

$sql = "UPDATE users SET teacher = '$uusi_rooli' WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result === TRUE) {
    echo "Oppilas on muokattu";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>