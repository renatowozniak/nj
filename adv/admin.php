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
<span class="login100-form-title"> NEWJUD &#8226; ADMIN </span>
		<h4>Parceiros</h4> 
		<a href="upload" class="admlink">UPLOAD DE ARQUIVOS</a><br>
		<a href="cadastro" class="admlink">CADASTRAR PARCEIRO</a><br>
		
			<br>
		<h4>Call Center &#9742;</h4>	
		<a href="uploadcall" class="admlink">UPLOAD DE AGENDAS</a><br>
		<a href="cadastro" class="admlink">CADASTRAR ASSESSORA</a><br>
		<a href="senha" class="admlink">TROCAR SENHA</a><br>
		
<?php
}
?>