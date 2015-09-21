<?php   
    include("verifica.php");
    include("cabecalho.php");
    include("menu-cadastros.php");
?>

<div id="conteudo">
    <p>Logado como <?php echo $_SESSION['nome']; ?></p>
    <p><a href="sair.php">Sair</a></p>
	<h2>Cadastro de Categorias</h2>
	<form action="insere-categoria.php" method="POST">
		<p><label for="">Nome Categoria:</label></p>
		<input type="text" name="nome">

		<p><label for="">Descrição:</label></p>
		<textarea name="descricao" cols="30" rows="10"></textarea>
		<p><input type="submit" value="salvar"></p>
	</form>
	<?php
		if (isset($_GET['mensagem'])) {
			echo $_GET['mensagem'];
		}
	?>

</div>

<?php
	include("rodape.php");
?>