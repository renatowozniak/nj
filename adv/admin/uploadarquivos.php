<?php
	$tipo = $_POST['arqtipo'];
	$nomedoarquivo = $_POST['cidade'];
	$filetoupload = $_FILES['arquivo'];


	echo $tipo.'<br>'.$nomedoarquivo.'<br>'.$filetoupload['name'];

	$upload_path = $_SERVER["DOCUMENT_ROOT"]."/adv/arquivos/".$tipo."/".$nomedoarquivo.'.xlsx';
	$uploadOk = 1;

	if(move_uploaded_file($filetoupload["tmp_name"], $upload_path)){
		header("Location: ".$_SERVER["DOCUMENT_ROOT"]."/adv/upload?ok=true");
		echo 'sucesso';
	}else{
		header("Location: ".$_SERVER["DOCUMENT_ROOT"]."/adv/upload?ok=false");
		echo 'false';
	}
?>