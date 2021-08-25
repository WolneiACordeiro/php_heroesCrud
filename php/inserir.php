<?php
include("conexao.php");

$var_aluno = $_POST["campo_aluno"];
$var_coisa = $_POST["campo_coisa"];
$arquivo = $_FILES['arquivo'];	

	for ($k = 0; $k < count($arquivo['name']); $k++){
	    move_uploaded_file($arquivo['tmp_name'][$k], "arquivos/".$arquivo['name'][$k]);
			mysqli_query($conexao,"INSERT INTO top5coisasquenaogostamos (Aluno, Coisa, Imagem) VALUES ('$var_aluno','$var_coisa','".$arquivo['name'][$k]."')");
					echo "O arquivo <b>". $arquivo['name'][$k] . "</b> foi enviado com sucesso!<br>";	
	}

header("location:inicio.php");

?>