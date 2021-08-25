<?php
include("conexao.php");

$var_id = $_POST["campo_codigo"];
$var_nome = $_POST["campo_nome"];
$var_universo = $_POST["campo_universo"];
$arquivo = $_FILES['arquivo'];

mysqli_query($conexao,"UPDATE heroes SET nome =  '$var_nome', universo = '$var_universo', imagem = '$arquivo' WHERE id = '$var_id'");

header("location:index.php");

?>