<div id="cadcontent">
<form method="POST" action='/acesso/login/cadastro.php' id="cadastroparceiro">
	<h2>CADASTRAR PARCEIRO</h2>
	<br>
	<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required/>
	<label for="inputEmail" class="sr-only">Email</label>
	<input type="email" class="form-control" name="email" id="email" placeholder="Email" required/>
	<input type="text" class="form-control" name="senha" id="senha" placeholder="Senha" required/>
	<input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" required/><br>
	
	<button id="enviar" class="btn btn-lg btn-danger btn-block" type="submit">CADASTRAR</button>
		<br>
	<?php
	if(isset($_GET["registro"])){
		if($_GET["registro"]=="sucesso"){
			echo '<br><span class="sucesso"> &#8226; Parceiro cadastrado com sucesso!</span>';
		}else if($_GET["registro"]=="falha"){
			echo '<br><span class="falha"> &#8226; Algum erro aconteceu!</span>';
		}if($_GET["registro"]=="vazio"){
			echo '<br><span class="falha"> &#8226; Preencha todos os campos!</span>';
		}
	}
	?>
</form>
