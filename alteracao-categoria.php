<?php
    include("cabecalho.php");
    include("menu-cadastros.php");
    include("conexao.php");
    
    $id = $_GET['id'];
    $sql = "select * from categorias where id = $id";
    $resultado = mysql_query($sql);
    $categoria = mysql_fetch_assoc($resultado);
?>

<div id="conteudo">
    <h2>Alterações de Categoria</h2>
    <form action="altera-categoria.php" method="POST">
        <p><label for="">Nome Categoria:</label></p>
        <input type="text" name="nome" value="<?php echo $categoria['nome']; ?>">
        <p><label for="">Descrição:</label></p>
        <textarea name="descricao" cols="30" rows="10"><?php echo $categoria['descricao']; ?></textarea>
        <input type="hidden" name="id" value="<?php echo $categoria['id']; ?>">
        <p><input type="submit" value="Salvar"></p>
    </form>
    <?php
        if(isset($_GET['mensagem'])){
            echo $_GET['mensagem'];
        }
    ?>
</div>
<?php include ("rodape.php"); ?>