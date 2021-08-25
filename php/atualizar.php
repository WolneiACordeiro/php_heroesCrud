<?php
include("conexao.php");

$var_aluno = $_POST["campo_aluno"];
$var_coisa = $_POST["campo_coisa"];
$var_codigo = $_POST["campo_codigo"];

mysqli_query($conexao,"UPDATE top5coisasquenaogostamos SET Aluno = '$var_aluno', Coisa = '$var_coisa' WHERE Codigo = $var_codigo");

header("location:inicio.php");

?>