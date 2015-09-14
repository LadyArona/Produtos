<?php
    include("conexao.php");
    
    $id         = mysql_real_escape_string(strip_tags($_POST['id']));
    $nome       = mysql_real_escape_string(strip_tags($_POST['nome']));
    $descricao  = mysql_real_escape_string(strip_tags($_POST['descricao']));
    
    $sql = "update categorias set nome = '$nome', descricao = '$descricao' where id = $id;";
    mysql_query($sql) or die(mysql_error());
    
    header("Location: lista-categorias.php?mensagem=Categoria alterada com sucesso!");
    die();
?>
