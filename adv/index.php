<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/styles.css" rel="stylesheet">

  <title>NEWJUD</title>

</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/core/layout/header.php'; ?>
    <div class="corpotodo">
        <div id="container">
            <?php if(empty($_GET['tipo'])){ ?>

             <div>
            <a class="linkAcesso" href="/adv/?tipo=agenda">AGENDA</a>
            <a class="linkAcesso" href="/adv/?tipo=acoes">AÇÕES</a>
            <a class="linkAcesso" href="/adv/?tipo=teste">TESTE</a>
            <hr>
            <br>
            <?php
            if ($diretorio = opendir(".")){
            while(false !== ($pasta = readdir($diretorio))) {
                if(is_dir($pasta) and ($pasta != ".") and ($pasta != "..")){
                    echo "<a href='$pasta'>$pasta</a><br>";
                }
            }
                closedir($diretorio);
            }
            ?>
        </div>
<?php
    }else{
        include 'acesso.php';
    }
    ?>
        </div>
    </div>
</body>
</html>