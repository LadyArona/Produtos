<?php
    include("verifica.php");
    include("cabecalho.php");
    include("menu.php");
    include("conexao.php");
    $produto = mysql_real_escape_string(strip_tags($_GET['produto']));
    $sql =  "select * from produtos where id = $produto;";
    $resposta = mysql_query($sql) or die(mysql_error());
?>
<div id="conteudo">
    <p>Logado como <?php echo $_SESSION['nome']; ?></p>
    <p><a href="sair.php">Sair</a></p>    
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