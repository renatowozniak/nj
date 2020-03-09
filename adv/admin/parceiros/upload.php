<?php
	include $_SERVER['DOCUMENT_ROOT'].'/adv/login/conexao.php';
	$sql = 'SELECT * FROM usuarios WHERE niveis_acesso_id=1';

	$parceiros = $conn->query($sql);
?>

<h2>UPLOAD</h2>
<form id="upload" method="POST" action="/adv/admin/parceiros/uploadarquivos.php" enctype="multipart/form-data">

	<table class="uploadtable">
		<tr>
			<td>PARCEIRO: 
		<td>
		<select id="cidade" name="cidade" class="form-control">
		<?php
			while($row = $parceiros->fetch_array()){ 
				if(!empty($row['cidade']) && !empty($row['nome'])) echo '<option value="'.strtolower($row['cidade']).'_'.strtolower($row['nome']).'">'.$row['cidade'].' ('.$row['nome'].')</option>';
			}
		?>
		</select>
		</td>
	</tr>
	<tr>
		<td>TIPO: </td>
		<td>
		<input type="radio" id="agenda" name="arqtipo" value="agenda"
         checked>
  		<label for="agenda">AGENDA</label> &#160;&#160;&#160;&#160;&#160;
  		<input type="radio" id="acao" name="arqtipo" value="acoes">
  		<label for="acao">AÇÕES</label>
  	</td>
  </tr>
  <tr>
  	<td></td>
  	<td><input type="file" id="arquivo" style="width:300px" name="arquivo" value="arquivo"></input></td>
  </tr>

  <tr>
  	<td></td>
  	<td><button id="subir" class="btn btn-lg btn-danger btn-block" type="submit">UPLOAD</button></td>
  </tr>
</table>
<br>
	<?php
		if(isset($_GET["ok"])){
			if($_GET["ok"]=="true"){
				echo '<span class="sucesso"> &#8226; Upload realizado com sucesso.</span>';
			} else{
				echo '<span class="falha"> &#8226; Não foi possivel realizar o upload.</span>';
			}
		}
	?>
</form>