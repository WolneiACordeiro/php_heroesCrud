<?php
include("conexao.php");

$var_nome = $_POST["campo_nome"];
$var_universo = $_POST["campo_universo"];
$var_imagem = $_POST["campo_imagem"];
$var_formato = $_POST["campo_formato"];

mysqli_query($conexao,"INSERT INTO heroes (nome, universo, imagem, formato) VALUES ('$var_nome','$var_universo', '$var_imagem', '$var_formato')");

header("location:inicial.php");

?>