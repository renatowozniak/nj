<?php
	$tipo = $_POST['diasemana'];
	$nomedoarquivo = $_POST['cidade'];
	$filetoupload = $_FILES['arquivo'];


	if(file_exists($_SERVER["DOCUMENT_ROOT"]."/arquivos/call/".$nomedoarquivo)==false){
		mkdir($_SERVER["DOCUMENT_ROOT"]."/arquivos/call/".$nomedoarquivo);
	}

	$upload_path = $_SERVER["DOCUMENT_ROOT"]."/arquivos/call/".$nomedoarquivo.'/'.$diasemana.'.xlsx';
	$uploadOk = 1;

	if(move_uploaded_file($filetoupload["tmp_name"], $upload_path)){
		header("Location: /adv/uploadcall?ok=true");
	}else{
		
	}
?>