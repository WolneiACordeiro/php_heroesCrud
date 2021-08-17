<?php
include("conexao.php");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Heroes - Atualizar</title>
        <link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
<body>
<div id="menu-bar">
        <div class="menu-bar-area">
            <a href="inicial.php"><div class="menu-option"><img src="img/icons/home_white_24dp.svg" alt="Home"><span>Home</span></div></a>
            <a href="cadastro.php"><div class="menu-option"><img src="img/icons/add_white_24dp.svg" alt="Home"><span>Cadastrar</span></div></a>
        </div>
        
    </div>

<?php

$query = mysqli_query($conexao, "SELECT * FROM heroes WHERE id =" . $_GET["id"]);
while ($exibe = mysqli_fetch_array($query)) {

?>

<div class="main-container-single">

    <div class="title-bar">
        <h1>Editar</h1>
        <a href="inicial.php">Voltar</a>
    </div>

    <form action="atualizar.php" method="post">

        <div id="main" class="heroes-table">
                <div class="heroes-table-line">
                    <div class="heroes-table-gap">
                        <label for="campo_nome">Herói:</label>
                        <input type="hidden" name="campo_codigo" value="<?php echo $exibe[0] ?>">
                        <input value="<?php echo $exibe[1] ?>" type="text" name="campo_nome" maxlength="50">
                    </div>
                    <div class="heroes-table-gap">
                        <label for="campo_universo">Universo:</label>
                        <select name="campo_universo" id="universe">
                            <option value="<?php echo $exibe[2] ?>" selected hidden><?php echo $exibe[2] ?></option>
                            <option value="Marvel">Marvel</option>
                            <option value="DC">DC</option>
                            <option value="Outro">Outro</option>
                        </select>
                    </div>
                    <div class="heroes-table-gap">
                        <label for="campo_imagem">Imagem:</label>
                        <div>
                        <input type="text" value="<?php echo $exibe[3] ?>" name="campo_imagem" maxlength="50">
                        <select name="campo_formato" id="format">
                            <option value="<?php echo $exibe[4] ?>" selected hidden><?php echo $exibe[4] ?></option>
                            <option value="JPG">JPG</option>
                            <option value="PNG">PNG</option>
                            <option value="JPEG">JPEG</option>
                        </select>
                        </div>
                    </div>
                    <div class="heroes-table-gap">
                        <input type="submit" value="Salvar">
                    </div>
                </div>
        </div>
    </form>
</div>



<?php } ?>

</body>
</html>