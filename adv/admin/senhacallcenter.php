<form method="POST" id="trocarsenhadocall" action="/adv/admin/trocarsenha.php">
	<h2>SENHA DO CALL CENTER</h2><br>
	<input type="text" class="form-control" name="novasenha" placeholder="Digite a nova senha"/><br>
	<button type="submit" class="btn btn-lg btn-danger btn-block">CONFIRMAR</button>

	<?php
		if(isset($_GET["ok"])){
			if($_GET["ok"]=="true"){
				echo '<span class="sucesso">Senha trocada com sucesso.</span>';
			} else{
				echo '<span class="falha">Não foi possivel trocar a senha.</span>';
			}
		}
	?>
</form>