<?php
include("conexao.php");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Insert</title>
	</head>
<body>

<h1>Coisas que não gostamos</h1>
<a href="cadastro.php">Cadastrar</a>
<hr>

<form action="inicio.php" method="post">
<table border="0">
	<tr>
		<td><b>Buscar</b></td>
		<td><input type="text" name="buscar" size="50"><input type="submit" value="Buscar"></td>
	</tr>
</table>
</form>

<?php
if(empty($_POST["buscar"])){
	echo "Digite o nome do aluno";	
} else {
?>

<table border="1">
	<tr>
		<td><b>Frase</b></td>
		<td><b>Editar</b></td>
		<td><b>Excluir</b></td>
		<td><b>Imagem</b></td>
	</tr>
<?php
$busca = $_POST["buscar"];

$query = mysqli_query($conexao,"SELECT * FROM top5coisasquenaogostamos WHERE Aluno Like '%$busca%'");
while($exibe = mysqli_fetch_array($query)){

?>
<tr>
<td><b><?php echo $exibe[1] ?></b> não gosta de <b><?php echo $exibe[2] ?></b>.</td>
<td><a href="atualiza.php?id=<?php echo $exibe[0] ?>">Editar</a></td>
<td><a href="excluir.php?id=<?php echo $exibe[0] ?>">Excluir</a></td>
<td><img src="arquivos/<?php echo $exibe[3] ?>" width="100"></td>
</tr>

<?php } ?>

</table>

<?php } ?>

</body>
</html>
















