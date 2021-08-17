<html>
<head>
    <meta charset="utf-8">
    <title>Heroes - Cadastrar</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <div id="menu-bar">
        <div class="menu-bar-area">
            <a href="index.php"><div class="menu-option"><img src="img/icons/home_white_24dp.svg" alt="Home"><span>Home</span></div></a>
            <a href="#"><div class="menu-option"><img src="img/icons/add_white_24dp.svg" alt="Home"><span>Cadastrar</span></div></a>
        </div>
        
    </div>
<div class="main-container-single">

    <div class="title-bar">
        <h1>Cadastro</h1>
        <a href="index.php">Voltar</a>
    </div>

    <form action="inserir.php" method="post">

    <div id="main" class="heroes-table">
            <div class="heroes-table-line">
                <div class="heroes-table-gap">
                    <label for="campo_nome">Herói:</label>
                    <input type="text" name="campo_nome" maxlength="50">
                </div>
                <div class="heroes-table-gap">
                    <label for="campo_universo">Universo:</label>
                    <select name="campo_universo" id="universe">
                        <option value="Marvel">Marvel</option>
                        <option value="DC">DC</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>
                <div class="heroes-table-gap">
                    <label for="campo_imagem">Imagem:</label>
                    <div>
                    <input type="text" name="campo_imagem" maxlength="50">
                    <select name="campo_formato" id="format">
                        <option value="JPG">JPG</option>
                        <option value="PNG">PNG</option>
                        <option value="JPEG">JPEG</option>
                    </select>
                    </div>
                </div>
                <div class="heroes-table-gap">
                    <input type="submit">
                </div>
            </div>
    </div>
</div>

</form>
	
</body>
</html>