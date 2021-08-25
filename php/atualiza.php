<?php
include("conexao.php");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Insert</title>
	</head>
<body>

<h1>Atualiza</h1>
<a href="inicio.php">Voltar</a>
<hr>

<?php

$var_id = $_GET["id"];

$query = mysqli_query($conexao,"SELECT * FROM top5coisasquenaogostamos WHERE Codigo = $var_id");
while($exibe = mysqli_fetch_array($query)){

?>



<form action="atualizar.php" method="post">

<input type="hidden" name="campo_codigo" value="<?php echo $exibe[0] ?>">

<table border="0">
	<tr>
		<td>Nome:</td>
		<td><input type="text" value="<?php echo $exibe[1] ?>" name="campo_aluno"></td>
	</tr>
	<tr>
		<td>Coisa:</td>
		<td>
		<textarea name="campo_coisa" cols="35" rows="5"><?php echo $exibe[2] ?></textarea>
		</td>
	</tr>
	<tr>
		<td></td>
		<td align="right"><input type="submit" value="Atualizar"></td>
	</tr>
</table>
</form>

<?php } ?>

</body>
</html>