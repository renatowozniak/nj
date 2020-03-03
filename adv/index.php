
<!doctype html>
<html lang="pt_BR">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/styles.css" rel="stylesheet">

  <title>
    :: NEWJUD ::
  </title>

</head>
<body>
    <div class="corpotodo">
        <div class="superior">
            NEWJUD
        </div>

        <div>
            <?php
            if ($diretorio = opendir("./"))
            {
            while(false !== ($pasta = readdir($diretorio)))
            {
                if(is_dir($pasta) and ($pasta != ".") and ($pasta != ".."))
                {
                    echo "<a href='$pasta'>$pasta</a><br>";
                }
            }
            closedir($diretorio);
            }
            ?>
        </div>
    </div>
    <div id="sair">
        <!--<a href="http://localhost/adv/login/">SAIR</a>-->
        <form method="get" action="http://localhost/adv/login/">
            <!--<button text-align: center type="submit">SAIR</button></form>-->
            <input type="submit" name="botao" value="SAIR" class="botaoEnviar" />

    </div>
    
</body>
</html>