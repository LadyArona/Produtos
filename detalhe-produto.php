<?php
    include("cabecalho.php");
    include("menu.php");
    include("conexao.php");
    $produto = $_GET['produto'];
    $sql =  "select * from produtos where id = $produto;";
    $resposta = mysql_query($sql) or die(mysql_error());
?>
<div id="conteudo">
<?php
    while($registro = mysql_fetch_assoc($resposta)){
?>
    <p><img src="imagens/<?php echo $registro['imagem'];?>" alt=""></p>
    <p><?php echo $registro['nome'];?></p>
    <p><?php echo $registro['valor'];?></p>
    <p><?php echo $registro['descricao'];?></p>
<?php }?>
</div>
<?php
    include("rodape.php");
?>