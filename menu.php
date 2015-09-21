<?php
    include("conexao.php");
    $sql = "select * from categorias;";
    $resposta = mysql_query($sql);
?>
<div id="menu">
    <div class="titulo-menu">Menu</div>
    <a href="index.php"><div class="item-menu">Início</div></a>
    <?php
        while($registro = mysql_fetch_assoc($resposta)){
            echo "<a href=index.php?categoria=" . $registro['id'] . "><div class='item-menu'>" . $registro['nome'] . "</div></a>";
        }
    ?>
    <a href="login.php"><div class="item-menu">Administração</div></a>
</div>