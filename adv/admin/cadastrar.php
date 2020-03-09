<div id="cadcontent">
<form method="POST" action='/adv/login/cadastro.php' id="cadastroparceiro">
	<h2>CADASTRAR PARCEIRO</h2>
	<br>
	<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required/>
	<label for="inputEmail" class="sr-only">Email</label>
	<input type="email" class="form-control" name="email" id="email" placeholder="Email" required/>
	<input type="text" class="form-control" name="senha" id="senha" placeholder="Senha" required/>
	<input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" required/><br>
	
	<button id="enviar" class="btn btn-lg btn-danger btn-block" type="submit">CADASTRAR</button>

	<?php
	if(isset($_GET["registro"])){
		if($_GET["registro"]=="sucesso"){
			echo '<br><span class="sucesso">Parceiro cadastrado com sucesso!</span>';
		}else if($_GET["registro"]=="falha"){
			echo '<br><span class="falha">Algum erro aconteceu!</span>';
		}if($_GET["registro"]=="vazio"){
			echo '<br><span class="falha">Preencha todos os campos!</span>';
		}
	}
	?>
</form>
