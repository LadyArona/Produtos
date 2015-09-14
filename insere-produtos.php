<?php
	include("conexao.php");

	$arquivo = $_FILES['foto'];
	$destino = 'imagens/'. $arquivo['name'];
	$resposta = move_uploaded_file($arquivo['tmp_name'], $destino);

	$nome = $_POST['nome'];
	$valor = $_POST['valor'];
	$descricao = $_POST['descricao'];
	$categoria = $_POST['categoria'];
	$imagem = $arquivo['name'];

	$sql = "insert into produtos (nome, valor, descricao, imagem, id_categoria) values ('$nome', '$valor', '$descricao', '$imagem', '$categoria');";
	mysql_query($sql) or die (mysql_error());

	header("Location: cadastro-produtos.php?mensagem=Produto inserido com sucesso!");
?>