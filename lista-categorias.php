<?php
    include("cabecalho.php");
    include("menu-cadastros.php");
    include("conexao.php");

    if (isset($_GET['busca'])){
        $nome =$_GET['busca'];
        $sql = "SELECT * FROM CATEGORIAS WHERE NOME LIKE '%$nome%'";
    }else{
        $sql = "SELECT * FROM CATEGORIAS";    
    }

    $resposta = mysql_query($sql);
?>

<div id="conteudo">
    <h2>Listagem de Categorias</h2>
    <div id="listagem">
    <form action="lista-categorias.php" method="GET">
        <label for="busca">Buscar: </label>
        <input type="text" name="busca">
        <input type="submit" value="Buscar">        
    </form>        
        <?php
            while ($registro = mysql_fetch_assoc($resposta)) {
                echo "<ul>";
                echo "<li><b>Nome: ".$registro['nome']."</b></li>";
                echo "<li>".$registro['descricao']."</li>";
                echo "</ul>";
            }
        ?>
    </div>
</div>
<?php
    include("rodape.php");
?>