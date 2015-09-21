<?php
    include("verifica.php");
    include("cabecalho.php");
    include("menu-cadastros.php");
    include("conexao.php");

    if (isset($_GET['busca'])){
        $nome = mysql_real_escape_string(strip_tags($_GET['busca']));
        $sql = "SELECT * FROM PRODUTOS WHERE NOME LIKE '%$nome%'";
    }else{
        $sql = "SELECT * FROM PRODUTOS";    
    }

    $resposta = mysql_query($sql);
?>

<div id="conteudo">
    <p>Logado como <?php echo $_SESSION['nome']; ?></p>
    <p><a href="sair.php">Sair</a></p>    
    <h2>Listagem de Produtos</h2>
    <div id="listagem">
    <form action="lista-produtos.php" method="GET">
        <label for="busca">Buscar: </label>
        <input type="text" name="busca">
        <input type="submit" value="Buscar">        
    </form>        
        <?php
            while ($registro = mysql_fetch_assoc($resposta)) {
                echo "<ul>";
                echo "<li><b>Nome: ".$registro['nome']."</b></li>";
                echo "<li>Valor: ".$registro['valor']."</li>";
                echo "<li>Descriçao: ".$registro['descricao']."</li>";
                echo "<a href='alteracao-produto.php?id=".$registro['id']."'>Editar</a> ";
                echo "<a href='excluir-produto.php?id=".$registro['id']."'>Excluir</a>";
                echo "</ul>";
            }
        ?>
    </div>
</div>
<?php
    include("rodape.php");
?>