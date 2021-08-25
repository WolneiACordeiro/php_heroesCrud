<?php
include("conexao.php");
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Heroes - Home</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<div id="menu-bar">
        <div class="menu-bar-area">
            <a href="index.php"><div class="menu-option"><img src="img/icons/home_white_24dp.svg" alt="Home"><span>Home</span></div></a>
            <a href="cadastro.php"><div class="menu-option"><img src="img/icons/add_white_24dp.svg" alt="Home"><span>Cadastrar</span></div></a>
        </div>
</div>

<div class="main-container">

    <div class="title-bar-heroes">
        <h1>Heróis</h1>
		<form action="index.php" method="post">
			<div class="title-bar-search">
				<div>
					<div><b>Buscar</b></div>
					<div><input type="text" name="buscar" size="50"><input type="submit" value="Buscar"></div>
				</div>
			</div>
		</form>
    </div>

        <div id="main" class="heroes-grid">
		<div class="show-main">
			<div class="show-line-title">
				<div class="show-line-element"><h3>Herói</h3></div><div class="show-line-element"><h3>Universo</h3></div><div class="show-line-element"><h3>Imagem</h3></div><div class="show-line-element"><h3>Editar</h3></div><div class="show-line-element"><h3>Remover</h3></div>
			</div>
			<?php
			if(empty($_POST["buscar"])){
				$query = mysqli_query($conexao, "SELECT * FROM heroes");
				while ($exibe = mysqli_fetch_array($query)) { 
			?>
			
			<div class="show-line">
				<div class="show-line-element"><span><?php echo $exibe[1] ?></span></div><div class="show-line-element"><span><?php echo $exibe[2] ?></span></div><div class="show-line-element"><img id="show-line-image" src="arquivos/<?php echo $exibe[3] ?>" alt="Herói"></div><div class="show-line-element"><a href="atualiza.php?id=<?php echo $exibe[0] ?>"><b><img src="img/icons/edit_white_24dp.svg" alt="Deletar"></b></a></div><div class="show-line-element"><a href="excluir.php?id=<?php echo $exibe[0] ?>"><img src="img/icons/delete_forever_white_24dp.svg" alt="Deletar"></a></div>
			</div>

			<?php
				}
			?> 
			
			<?php
			} else {
			?>
				<?php
				$busca = $_POST["buscar"];
				$query = mysqli_query($conexao, "SELECT * FROM heroes WHERE nome Like '%$busca%'");
				while ($exibe = mysqli_fetch_array($query)) {
				?>
						<div class="show-line">
							<div class="show-line-element"><span><?php echo $exibe[1] ?></span></div><div class="show-line-element"><span><?php echo $exibe[2] ?></span></div><div class="show-line-element"><img id="show-line-image" src="arquivos/<?php echo $exibe[3] ?>" alt="Herói"></div><div class="show-line-element"><a href="atualiza.php?id=<?php echo $exibe[0] ?>"><b><img src="img/icons/edit_white_24dp.svg" alt="Deletar"></b></a></div><div class="show-line-element"><a href="excluir.php?id=<?php echo $exibe[0] ?>"><img src="img/icons/delete_forever_white_24dp.svg" alt="Deletar"></a></div>
						</div>
				<?php
				}
				?> 
				<?php
				}
				?>
        </div>

</div>

</body>
</html>