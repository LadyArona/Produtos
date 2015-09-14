<?php
	include("conexao.php");

	$id = $_GET['id'];

	$sql = "delete from produtos where id = $id;";
	mysql_query($sql) or die(mysql_error());

	header("Location: lista-produtos.php?mensagem=Produto excluido com sucesso!");
	die();
?>