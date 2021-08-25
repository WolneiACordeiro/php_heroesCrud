<?php
include("conexao.php");

$var_nome = $_POST["campo_nome"];
$var_universo = $_POST["campo_universo"];
$arquivo = $_FILES['arquivo'];	

	for ($k = 0; $k < count($arquivo['name']); $k++){
	    move_uploaded_file($arquivo['tmp_name'][$k], "arquivos/".$arquivo['name'][$k]);
			mysqli_query($conexao,"INSERT INTO heroes (nome, universo, imagem) VALUES ('$var_nome','$var_universo','".$arquivo['name'][$k]."')");	
	}

header("location:index.php");

?>