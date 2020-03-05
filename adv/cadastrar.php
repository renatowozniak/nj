<div id="cadcontent">
<form  method="POST" action='login/cadastro.php' id="cadastroparceiro">
	<table class="cadastrotable">
		<h2>CADASTRAR PARCEIRO</h2>
		<tr>
			<td>Nome: </td>
			<td><input type="text" class="cadform" name="nome" id="nome"/></td>
		</tr>
		<tr>
			<td>Email: </td>
			<td><input type="text" class="cadform" name="email" id="email"/></td>
		</tr>
		<tr>
			<td>Senha: </td>
			<td><input type="text" class="cadform" name="senha" id="senha"/></td>
		</tr>
		<tr>
			<td>Cidade: </td>
			<td><input type="text" class="cadform" name="cidade" id="cidade"/></td>
		</tr>
		<br>
		<tr>
			<td><button id="enviar" type="submit">CADASTRAR</button></td>
			<td></td>
		</tr>
	</table>

	<?php
	if(isset($_GET["registro"])){
		if($_GET["registro"]=="sucesso"){
			echo '<br><span class="sucesso">Parceiro cadastrado com sucesso!</span>';
		}
	}
	?>
</form>

</div>