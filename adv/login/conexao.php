<?php
	$servidor = "localhost";
	$usuario = "newjud55_suporte"; // newjud55_suporte
	$senha = "Sup0rt3"; //Sup0rt3
	$dbname = "newjud55_newjudbd"; //newjud55_newjudbd
	//$dbname = "funvildevendas";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
?>