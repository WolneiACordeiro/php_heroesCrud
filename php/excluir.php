<?php
include("conexao.php");

$var_id = $_GET["id"];

mysqli_query($conexao,"DELETE FROM top5coisasquenaogostamos WHERE Codigo = $var_id");

header("location:inicio.php");

?>