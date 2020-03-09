<?php

if(isset($_GET["tipo"])){
    if($_GET["tipo"]=="cadastro"){
        include 'admin/cadastrar.php';
    }else if($_GET["tipo"]=="upload"){
        include 'admin/upload.php';
    }else if($_GET["tipo"]=="senha"){
        include 'admin/senhacallcenter.php';
    }
}else{
?>
<h2>ADMIN</h2>
	<a href="upload" class="admlink">UPLOAD DE ARQUIVOS</a><br>
	<a href="cadastro" class="admlink">CADASTRAR PARCEIRO</a><br>
	<a href="senha" class="admlink">SENHA DO CALL CENTER</a><br>
<?php
}
?>