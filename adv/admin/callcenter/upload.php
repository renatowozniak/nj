<?php
	include $_SERVER['DOCUMENT_ROOT'].'/adv/login/conexao.php';
	$sql = 'SELECT * FROM usuarios WHERE niveis_acesso_id=2';

	$parceiros = $conn->query($sql);
?>

<h2>UPLOAD</h2>
<form id="upload" method="POST" action="/adv/admin/callcenter/uploadarquivos.php" enctype="multipart/form-data">

	<table class="uploadtable">
		<tr>
			<td>Assessora: 
		<td>
		<select id="cidade" name="cidade" class="form-control">
		<?php
			while($row = $parceiros->fetch_array()){ 
				if(!empty($row['cidade']) && !empty($row['nome'])) echo '<option value="'.strtolower($row['cidade']).'">'.$row['cidade'].' ('.$row['nome'].')</option>';
			}
		?>
		</select>
		</td>
	</tr>
	<tr>
		<td>TIPO: </td>
		<td>
		<input type="radio" id="segunda" name="diasemana" value="segunda"
         checked>
  		<label for="segunda">SEGUNDA</label> <BR>
  		<input type="radio" id="terca" name="diasemana" value="terca">
  		<label for="terca">TERÇA</label><BR>
  		<input type="radio" id="quarta" name="diasemana" value="quarta">
  		<label for="quarta">QUARTA</label><BR>
  		<input type="radio" id="quinta" name="diasemana" value="quinta">
  		<label for="quinta">QUINTA</label><BR>
  		<input type="radio" id="sexta" name="diasemana" value="sexta">
  		<label for="sexta">SEXTA</label>
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