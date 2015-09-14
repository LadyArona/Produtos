<?php
    include("conexao.php");
    
    if (file_exists($_FILES['foto']['tmp_name'])){
        $arquivo = $_FILES['foto'];
        $destino = 'imagens/'.$arquivo['name'];
        $resposta = move_uploaded_file($arquivo['tmp_name'], $destino);
        $imagem = $arquivo['name'];
    }else{
        $imagem = $_POST['foto-atual'];
    }
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $descricao = $_POST['descricao'];
    $categoria= $_POST['categoria'];
    
    $sql = "update produtos set nome = '$nome', valor = '$valor', descricao = '$descricao', imagem = '$imagem',
            id_categoria = $categoria where id = $id;";
    mysql_query($sql) or die(mysql_error());
    
    header("Location: lista-produtos.php?mensagem=Produto alterado com sucesso!");
    die();
?>
