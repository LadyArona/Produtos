<?php
	include("conexao.php");

	$arquivo = $_FILES['foto'];
	$destino = 'imagens/'. $arquivo['name'];
	$resposta = move_uploaded_file($arquivo['tmp_name'], $destino);

	$nome       = mysql_real_escape_string(strip_tags($_POST['nome']));
	$valor      = mysql_real_escape_string(strip_tags($_POST['valor']));
	$descricao  = mysql_real_escape_string(strip_tags($_POST['descricao']));
	$categoria  = mysql_real_escape_string(strip_tags($_POST['categoria']));
	$imagem     = mysql_real_escape_string(strip_tags($arquivo['name']));

	$sql = "insert into produtos (nome, valor, descricao, imagem, id_categoria) values ('$nome', '$valor', '$descricao', '$imagem', '$categoria');";
	mysql_query($sql) or die (mysql_error());

	header("Location: cadastro-produtos.php?mensagem=Produto inserido com sucesso!");
?>