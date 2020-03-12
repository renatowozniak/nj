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

  				if($index==76) echo '<br><h6>APOSENTADORIA ESPECIAL</h6>';
  				else if($index==80) echo '<br><h6>APOSENTADORIA POR IDADE</h6>';
  				else if($index==81) echo '<br><h6>APOSENTADORIA POR INVALIDEZ</h6>';
  				else if($index==95) echo '<br><h6>APOSENTADORIA RURAL</h6>';
  				else if($index==101) echo '<br><h6>AUXÍLIO ACIDENTE</h6>';
  				else if($index==109) echo '<br><h6>AUXÍLIO DOENÇA</h6>';
  				else if($index==119) echo '<br><h6>AUXÍLIO RECLUSÃO</h6>';
  				else if($index==125) echo '<br><h6>LOAS (BENEFÍCIO ASSISTENCIAL)</h6>';
  				else if($index==137) echo '<br><h6>PENSÃO POR MORTE</h6>';
  				else if($index==145) echo '<br><h6>REVISÃO DE BENEFÍCIOS</h6>';
  				else if($index==156) echo '<br><h6>SALÁRIO MATERNIDADE</h6>';

  				else if($index==22 || $index==36) echo '<br>';

  				echo '&#8226; <a href="../downloads/p'.$index.'/'.$nome_arquivo.'.rar" class="bancolink">'.$nome_arquivo.'</a><br>';
			}
    	}
	}
?>