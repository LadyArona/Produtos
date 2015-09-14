<?php
    include("conexao.php");
    if (isset($_GET['categoria'])){
        $categoria = $_GET['categoria'];
        $sql = "select * from produtos where id_categoria = $categoria;";
    }else{
        $sql = "select * from produtos;";  
    }
    
    $resposta = mysql_query($sql);
?>
<div id="conteudo">
    <?php
        while($registro = mysql_fetch_assoc($resposta)){
    ?>
    <a href="detalhe-produto.php?produto=<?php echo $registro['id'];?>">
        <div class="produto">
            <img src="imagens/<?php echo $registro['imagem'];?>" alt="">
            <p><?php echo $registro['nome'];?></p>
            <p><?php echo $registro['valor'];?></p>
        </div>
    </a>
    <?php } ?>
</div>