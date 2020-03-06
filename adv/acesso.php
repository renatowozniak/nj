<?php
  require_once __DIR__.'/../core/SimpleXLSX.php';

  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', true);
?>

<?php
  $cidade = $_SESSION['usuarioCidade'];

  $tipo = $_GET['tipo'];
  $arquivo = 'arquivos/'.$tipo.'/'.$cidade.'.xlsx';



  if($tipo=='agenda') $tipocorrigido = 'AGENDA';
  else if($tipo=='acoes')$tipocorrigido = 'AÇÕES';

  echo '<h1 class="acessotitulo">'.$tipocorrigido.'</h1>';
            
  if(file_exists($arquivo)) 
    echo '<span class="atualizado">'.date("d/m/Y", filectime($arquivo)).'</span> &#8226; <a href="'.$arquivo.'" class="download">DOWNLOAD</a><br>';

  if ( $xlsx = SimpleXLSX::parse($arquivo)) {
    $agenda = $xlsx->rows();

    echo "<table class='viewer' border=1 style='width:100%;'>";
    foreach ($agenda as $index=>$row) {
      echo "<tr>";
    foreach ($row as $column) {
      if($index>0) echo "<td style='border:2px solid'><span class='agendatexto'>$column</span></td>";
    else echo "<td bgcolor='#aa66ee' style='color:#fff; font-weight: bolder; border:2px solid black;'><span class='agendatitulo'>$column</span></td>";
    }
    echo "</tr>";
  }    
  echo "</table>";
} else {
    echo '<div id="vazio">Não existe '.$tipocorrigido.' disponível no momento.</div>';
  }
?>