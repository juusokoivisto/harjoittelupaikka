<?php
include "./../connect.php";

$oppilas_id = mysqli_real_escape_string($conn, $_POST["id"]);

$sql = "SELECT * FROM oppilaat WHERE id='".$oppilas_id."';";

header("location: index.php");
?>