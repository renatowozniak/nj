<div class="header">
	<div class="conteudo">
		<div id="esquerda">
			<a href="/adv" class="logo">NEWJUD</a>
		</div>

		<div id="direita">
			<div id="sair">
	        <!--<a href="http://localhost/adv/login/">SAIR</a>-->
	       

	       <?php if($_SESSION['usuarioNome']){ ?>

	        <form method="get" action="login/">
	        	 <?php echo '<span class="nomeDisplay">'.$_SESSION['usuarioNome'].'</span>'; ?>
	            <!--<button text-align: center type="submit">SAIR</button></form>-->
	            <input type="submit" name="botao" value="SAIR" class="botaoEnviar" />
	        </form>
	    <?php } ?>
	    </div>
		</div>
	</div>
</div>