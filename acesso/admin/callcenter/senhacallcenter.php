<form method="POST" id="trocarsenhadocall" action="/adv/admin/callcenter/trocarsenha.php">
	<h2>SENHA - CALL CENTER</h2><br>
	<input type="text" class="form-control" name="novasenha" placeholder="Digite a nova senha"/><br>
	<button type="submit" class="btn btn-lg btn-danger btn-block">CONFIRMAR</button>
		<br>
	<?php
		if(isset($_GET["ok"])){
			if($_GET["ok"]=="true"){
				echo '<span class="sucesso"> &#8226; Senha atualizada com sucesso.</span>';
			} else{
				echo '<span class="falha"> &#8226; Não foi possivel atualizar a senha.</span>';
			}
		}
	?>
</form>