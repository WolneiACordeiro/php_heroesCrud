<html>
	<head>
		<meta charset="utf-8">
		<title>Insert</title>
	</head>
<body>

<h1>Cadastro</h1>
<a href="inicio.php">Voltar</a>
<hr>

<form action="inserir.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="max_file_size" value="99999999">
<table border="0">
	<tr>
		<td>Arquivo:</td>
		<td><input type="file" name="arquivo[]"></td>
	</tr>
	<tr>
		<td>Nome:</td>
		<td><input type="text" name="campo_aluno"></td>
	</tr>
	<tr>
		<td>Coisa:</td>
		<td>
		<textarea name="campo_coisa" cols="35" rows="5"></textarea>
		</td>
	</tr>
	<tr>
		<td></td>
		<td align="right"><input type="submit"></td>
	</tr>
</table>
</form>

</body>
</html>