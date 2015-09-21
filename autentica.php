<?php
    include("conexao.php");
    
    $usuario = mysql_real_escape_string(strip_tags($_POST['usuario']));
    $senha = mysql_real_escape_string(strip_tags($_POST['senha']));
    $senha = md5($senha);
    
    $sql = "select id, nome from usuarios where usuario = '$usuario' and senha = '$senha';";
    $consulta = mysql_query($sql) or die(mysql_error());
    $resultado = mysql_fetch_assoc($consulta);
    
    if (empty($resultado)){
        header("Location: login.php?mensagem=Usuário ou senha incorretos.");
    } else {
        session_start();
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['nome'] = $resultado['nome'];
        header("Location: cadastro-categorias.php");
    }
    die();
?>