<?php
include("conexao.php");

$var_id = $_POST["campo_codigo"];
$var_nome = $_POST["campo_nome"];
$var_universo = $_POST["campo_universo"];
$var_imagem = $_POST["campo_imagem"];
$var_formato = $_POST["campo_formato"];

mysqli_query($conexao,"UPDATE heroes SET nome =  '$var_nome', universo = '$var_universo', imagem = '$var_imagem', formato = '$var_formato' WHERE id = '$var_id'");

header("location:inicial.php");

?>