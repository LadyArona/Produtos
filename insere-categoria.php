<?php
	include("conexao.php");

	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];

	$sql = "insert into categorias (nome, descricao) values ('$nome', '$descricao');";
	mysql_query($sql) or die (mysql_error());

	header("Location: cadastro-categorias.php?mensagem=Categoria inserida com sucesso!");
	die();
?>