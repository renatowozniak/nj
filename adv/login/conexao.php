<?php
	$servidor = "localhost";
	$usuario = "root"; // newjud55_suporte
	$senha = ""; //Sup0rt3
	$dbname = "newjudtest"; //newjud55_newjudbd
	//$dbname = "funvildevendas";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
?>