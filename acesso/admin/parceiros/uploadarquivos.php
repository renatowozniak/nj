<?php
	$tipo = $_POST['arqtipo'];
	$nomedoarquivo = $_POST['cidade'];
	$filetoupload = $_FILES['arquivo'];

	$upload_path = $_SERVER["DOCUMENT_ROOT"]."/arquivos/".$tipo."/".$nomedoarquivo.'.xlsx';
	$uploadOk = 1;

	if(move_uploaded_file($filetoupload["tmp_name"], $upload_path)){
		header("Location: /acesso/upload?ok=true");
	}else{
		header("Location: /acesso/upload?ok=false");
	}
?>