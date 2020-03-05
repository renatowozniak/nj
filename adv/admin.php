<?php

if(isset($_GET["tipo"])){
    if($_GET["tipo"]=="cadastro"){
        include 'cadastrar.php';
    }else if($_GET["tipo"]=="upload"){
        echo 'upload de arquivos';
    }
}else{
?>
<h2>PARCEIROS</h2>
<table>
	<td>
		<tr><a href="cadastro" class="admlink">CADASTRAR</a></tr>
		<tr><a href="upload" class="admlink">UPLOAD DE ARQUIVOS</a></tr>
	</td>
</table>
<?php
}
?>