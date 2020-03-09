<?php
	include $_SERVER['DOCUMENT_ROOT'].'/adv/login/conexao.php';

	$novasenha = $_POST["novasenha"];
	$senha = md5($novasenha);

	$sql = "UPDATE usuarios SET senha='".$senha."' WHERE niveis_acesso_id=2";

	if ($conn->query($sql) === TRUE) {
    	header("Location: /adv/senha?ok=true");
	} else {
   		 header("Location: /adv/senha?ok=false");
	}
?>