<?php
	include("conexao.php");

	$id = mysql_real_escape_string(strip_tags($_GET['id']));

	$sql = "delete from produtos where id_categoria = $id;";
	mysql_query($sql) or die(mysql_error());

	$sql2 = "delete from categorias where id = $id;";
	mysql_query($sql2) or die(mysql_error());

	header("Location: lista-categorias.php?mensagem=Categoria excluida com sucesso!");
	die();
?>