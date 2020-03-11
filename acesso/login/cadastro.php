<?php
	session_start();	
	include_once("conexao.php");	

	if(!empty($_POST['email']) && !empty($_POST['senha'])&& !empty($_POST['nome'])&& !empty($_POST['cidade'])){
		$email = mysqli_real_escape_string($conn, $_POST['email']);
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $cidade = mysqli_real_escape_string($conn, $_POST['cidade']);

    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = md5($senha);

    $inserir = "INSERT INTO usuarios (nome, cidade, email, senha, niveis_acesso_id)  VALUES ('".$nome."', '".$cidade."', '".$email."', '".$senha."', '1')";

    if (mysqli_query($conn, $inserir)) {
    header ('Location: ../cadastro?registro=sucesso');
} else {
    header ('Location: ../cadastro?registro=error');
}
	}else{
    header ('Location: ../cadastro?registro=vazio');
  }
?>