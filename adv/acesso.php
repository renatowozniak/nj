<?php
  require_once __DIR__.'/../core/SimpleXLSX.php';

  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', true);
?>

<?php
  $cidade = $_SESSION['usuarioCidade'];

  $tipo = $_GET['tipo'];
  $arquivo = 'arquivos/'.$tipo.'/'.$cidade.'.xlsx';

  echo '<h1>'.strtoupper($tipo).' - '.strtoupper($cidade).'</h1>';
            
  if(file_exists($arquivo)) echo '<span class="atualizado">Atualizado em: '.date("d/m/Y", filectime($arquivo)).'</span> &#8226; <a href="'.$arquivo.'" class="download">Download</a>';

  if ( $xlsx = SimpleXLSX::parse($arquivo)) {
    $agenda = $xlsx->rows();

    echo "<table class='viewer' border=1>";
    foreach ($agenda as $index=>$row) {
      echo "<tr>";
    foreach ($row as $column) {
      if($index>0) echo "<td style='border:2px solid'><span class='agendatexto'>$column</span></td>";
    else echo "<td bgcolor='#ff781f' style='border:2px solid;'><span class='agendatitulo'>$column</span></td>";
    }
    echo "</tr>";
  }    
  echo "</table>";
} else {
    echo '<div id="vazio">Não existe '.$tipo.' disponível no momento.</div>';
  }
?>