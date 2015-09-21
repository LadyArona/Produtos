<?php
    include("cabecalho.php");
    include("menu.php");   
?>

<div id="conteudo">
    <h2>Login de Usuário</h2>
    <form action="autentica.php" method="POST">
        <label for="usuario">Usuário: </label>
        <input type="text" name="usuario"><br>
        <label for="senha">Senha: </label>
        <input type="password" name="senha"><br>
        <input type="submit" value="Login"><br>        
    </form>
    <?php
        if (isset($_GET['mensagem'])){
            echo $_GET['mensagem'];
        }
    ?>
</div>
<?php
    include("rodape.php");
?>