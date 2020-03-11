<?php
	$downloads = $_SERVER['DOCUMENT_ROOT'].'/downloads/';
	$diretorio = scandir($downloads);


	for($i = 2; $i < count($diretorio); $i++){
    	print_r($diretorio[$i])."<br>";

    	$index = $i-1;

    	if(!empty($diretorio[$i])){
    		$file_path = $downloads.'p'.($index).'/';
    		$arquivo = scandir($file_path);

    		foreach (glob($file_path."*.rar") as $file) {
  				$files[] = $file;

  				echo $file;
			}


    		


    		//echo '<a href="'..'">'..'</a>'
    	}

    	
	}

?>