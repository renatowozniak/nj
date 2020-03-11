<?php
	include_once('../core/variaveis.php');

	$downloads = $_SERVER['DOCUMENT_ROOT'].'/downloads/';
	$diretorio = scandir($downloads);

	$posicaominima=2; $posicaomaxima=76;

	if($_GET['tipo']=='previdenciario'){
		$posicaominima=77; $posicaomaxima=162;
	}

	for($i = $posicaominima; $i <= $posicaomaxima; $i++){
    	$index = $i-1;

    	if(!empty($diretorio[$i])){
    		$file_path = $downloads.'p'.($index).'/';
    		$arquivo = scandir($file_path);

    		foreach (glob($file_path."*.rar") as $file) {
  				$files[] = $file;
  				$nome_arquivo = basename($file);
  				$nome_arquivo = explode('.rar', $nome_arquivo)[0];



  				echo '<a href="../downloads/p'.$index.'/'.$nome_arquivo.'.rar" class="bancolink">'.$nome_arquivo.'</a><br>';
			}
    	}
	}
?>