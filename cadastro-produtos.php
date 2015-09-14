<?php
	include("cabecalho.php");
	include("menu-cadastros.php");
	include("conexao.php");
	$sql = "select * from categorias;";
	$resposta = mysql_query($sql);
?>

<div id="conteudo">
	<h2>Cadastro de Produtos</h2>
	<form action="insere-produtos.php" method="POST" enctype="multipart/form-data">
		<p><label for="">Nome do Produto:</label></p>
		<input type="text" name="nome">
		<p><label for="">Valor:</label></p>
		<input type="text" name="valor">	
		<p><label for="">Descrição:</label></p>
		<textarea name="descricao" cols="30" rows="10"></textarea>
		<p><label for="">Foto</label></p>
		<input type="file" name="foto">
		<p><label for="">Categoria:</label></p>
		<select name="categoria">
			<?php
				while ($registro = mysql_fetch_assoc($resposta)) {
					echo "<option value=". $registro['id'] . ">" . $registro['nome'] . "</option>";
				}
			?>
		</select>
		<p><input type="submit" value="Salvar"></p>
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