<?php

if(isset($_GET["tipo"])){
    if($_GET["tipo"]=="cadastro"){
        include 'admin/parceiros/cadastrar.php';
    }else if($_GET["tipo"]=="upload"){
        include 'admin/parceiros/upload.php';
    }else if($_GET["tipo"]=="senha"){
        include 'admin/callcenter/senhacallcenter.php';
    }else if($_GET["tipo"]=="uploadcall"){
        include 'admin/callcenter/upload.php';
    }
}else{
?>
<h2>ADMIN</h2><br>
		<h4>Parceiros</h4>
		<a href="cadastro" class="admlink">CADASTRAR PARCEIRO</a><br>
		<a href="upload" class="admlink">UPLOAD DE ARQUIVOS</a><br>
		<hr>
			<br>
		<h4>Call Center</h4>	
		<a href="senha" class="admlink">SENHA DO CALL CENTER</a><br>
		<a href="uploadcall" class="admlink">UPLOAD DE ARQUIVOS</a><br>
			<hr>
			<br>
	
	
<?php
}
?>