<?php
include("conexao.php");

$id = $_GET["id"];
mysqli_query($conexao, "DELETE FROM heroes WHERE id = $id");
header("location:index.php");
?>
