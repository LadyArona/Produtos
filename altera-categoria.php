<?php
    include("conexao.php");
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    
    $sql = "update categorias set nome = '$nome', descricao = '$descricao' where id = $id;";
    mysql_query($sql) or die(mysql_error());
    
    header("Location: lista-categorias.php?mensagem=Categoria alterada com sucesso!");
    die();
?>
