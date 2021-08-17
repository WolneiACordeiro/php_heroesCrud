<?php
$conexao = mysqli_connect("127.0.0.1","root","");
		   mysqli_select_db($conexao,"heroes_crud");
		   mysqli_set_charset($conexao,"UTF8");
?>