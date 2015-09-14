<?php
	include("conexao.php");

	$nome      = mysql_real_escape_string(strip_tags($_POST['nome']));
	$descricao = mysql_real_escape_string(strip_tags($_POST['descricao']));

	$sql = "insert into categorias (nome, descricao) values ('$nome', '$descricao');";
	mysql_query($sql) or die (mysql_error());

	header("Location: cadastro-categorias.php?mensagem=Categoria inserida com sucesso!");
	die();
?>