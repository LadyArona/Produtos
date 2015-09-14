<?php
    include("cabecalho.php");
    include("menu-cadastros.php");
    include("conexao.php");
    
    $sql      = "select * from categorias;";
    $resposta = mysql_query($sql);
    
    $id  = mysql_real_escape_string(strip_tags($_GET['id']));
    $sql = "select * from produtos where id = $id";
    $resultado = mysql_query($sql);
    $produto   = mysql_fetch_assoc($resultado);
?>

<div id="conteudo">
    <h2>Alterações de Produtos</h2>
    <form action="altera-produto.php" method="POST" enctype="multipart/form-data">
        <p><label for="">Nome do Produto:</label></p>
        <input type="text" name="nome" value="<?php echo $produto['nome']; ?>">
        <p><label for="">Valor:</label></p>
        <input type="text" name="valor" value="<?php echo $produto['valor']; ?>">
        <p><label for="">Descrição:</label></p>
        <textarea name="descricao" cols="30" rows="10"><?php echo $produto['descricao']; ?></textarea>
        <p><label for="">Foto:</label></p>
        <input type="file" name="foto"/>
        <p><label for="">Categoria:</label></p>
        <select name="categoria">
            <?php
                while($registro = mysql_fetch_assoc($resposta)){
                    if ($registro['id'] == $produto['id_categoria']){
                        echo "<option selected value=".$registro['id'].">".$registro['nome']."</option>";
                    }else{
                        echo "<option value=".$registro['id'].">".$registro['nome']."</option>";
                    }
                }
            ?>
        </select>
        <input type="hidden" name="foto-atual" value="<?php echo $produto['imagem']; ?>">
        <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
        <p><input type="submit" value="Salvar"></p>
    </form>
    <?php
        if(isset($_GET['mensagem'])){
            echo $_GET['mensagem'];
        }
    ?>
</div>
<?php include ("rodape.php"); ?>