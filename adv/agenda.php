<?php
  session_start();

  require_once __DIR__.'/../core/SimpleXLSX.php';

  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', true);
?>

<!doctype html>
<html lang="pt_BR">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/styles.css" rel="stylesheet">

  <title> NEWJUD </title>
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/core/layout/header.php'; ?>

    <div class="corpotodo"> 
        <div class="container">
          <?php
            $cidade = $_SESSION['usuarioCidade'];
            $arquivo = 'cidades/'.$cidade.'/agenda.xlsx';

            echo '<h1>AGENDA - '.strtoupper($cidade).'</h1>';
            echo '<span class="atualizado">Atualizado em: '.date("d/m/Y", filectime($arquivo)).'</span> &#8226; <a href="'.$arquivo.'" class="download">Download</a>';

            if ( $xlsx = SimpleXLSX::parse($arquivo)) {
              $agenda = $xlsx->rows();

              echo "<table class='viewer' border=1>";
              foreach ($agenda as $index=>$row) {
                  echo "<tr>";
               foreach ($row as $column) {
                  if($index>0) echo "<td ><span class='agendatexto'>$column</span></td>";
                  else echo "<td bgcolor='#ddd'><span class='agendatitulo'>$column</span></td>";
               }
               echo "</tr>";
            }    
            echo "</table>";
            } else {
              echo '<div id="vazio">Não há agenda disponível no momento :(</div>';
            }
          ?>
        </div>
    </div>
  </div>
</body>
</html>