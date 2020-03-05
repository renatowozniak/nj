<?php
    session_start();

    if(empty($_SESSION['usuarioNome']) || empty($_SESSION['usuarioCidade']))
        header('Location: /');
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/styles.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">

  <title>NEWJUD</title>

</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/core/layout/header.php'; ?>
    <div class="corpotodo">
        <div id="container">
           <?php
                if($_SESSION['usuarioNiveisAcessoId']=='1'){
           ?>

            <?php 

            if(empty($_GET['tipo'])){ ?>

             <div>
                <div id="mainmenu"><h1>ARQUIVOS<h1><br>
                <a class="linkAcesso" href="/adv/agenda">AGENDA</a>
                <a class="linkAcesso" href="/adv/acoes">AÇÕES</a>
            </div>
            
            <?php
            /*if ($diretorio = opendir(".")){
            while(false !== ($pasta = readdir($diretorio))) {
                if(is_dir($pasta) and ($pasta != ".") and ($pasta != "..")){
                    echo "<a href='$pasta'>$pasta</a><br>";
                }
            }
                closedir($diretorio);
            }*/
            ?>
        </div>
            <?php
                }else{
                    include 'acesso.php';
                }

            }else if($_SESSION['usuarioNiveisAcessoId']=='0'){
                include 'admin.php';
            }
            ?>
        </div>
    </div>
</body>
</html>