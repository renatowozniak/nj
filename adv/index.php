<?php
    session_start();

    if(empty($_SESSION['usuarioNome']) || empty($_SESSION['usuarioCidade']))
        header('Location: /adv/login/');

    $arquivos = '../../arquivos/call/'.$_SESSION['usuarioCidade'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>NEWJUD</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100"> 
			<!-- PÁGINA INICIAL - PARCEIRO -->
				<div class="login100-form validate-form" method="POST">
 				<?php
                if($_SESSION['usuarioNiveisAcessoId']=='1'){
					  	// ABRE MENU PRINCIPAL
	            		if(empty($_GET["tipo"]) || ($_GET["tipo"]!='agenda' && $_GET["tipo"]!='acoes')){
	           		?>
					<span class="login100-form-title">
						NEWJUD &#8226; <?php echo strtoupper($_SESSION['usuarioNome']); ?>
					</span>
					

					<div class="container-login100-form-btn">
						<a class="login100-form-btn" href="/adv/agenda">
							AGENDA
						</a>
					</div>

					<div class="container-login100-form-btn">
						<a class="login100-form-btn" href="/adv/acoes">
							AÇÕES
						</a>
					</div>
					<?php
				// FECHA TIPO
			} else{
				echo '<a href="/adv/" class="voltarlink">&#9664; VOLTAR</a><br><br>';
				include 'acesso.php';
			}
	        }else if($_SESSION['usuarioNiveisAcessoId']=='2'){
	        ?>

	        <!-- PÁGINA INICIAL - CALL CENTER -->

	        <span class="login100-form-title"> NEWJUD &#8226; <?php echo strtoupper($_SESSION['usuarioNome']); ?> </span>
					<div class="container-login100-form-btn">
						<?php 
						if(file_exists($_SERVER['DOCUMENT_ROOT'].'/arquivos/call/'.$_SESSION['usuarioCidade']."/segunda.xlsx")) 
							echo '<a class="login100-form-btn" href="'.$arquivos.'/segunda.xlsx"> SEGUNDA-FEIRA </a>'; 
						else
							echo '<a class="login100-form-btn-dont"> SEGUNDA-FEIRA </a>'; 
						?>
					</div>

					<div class="container-login100-form-btn">
						<?php 
						if(file_exists($_SERVER['DOCUMENT_ROOT'].'/arquivos/call/'.$_SESSION['usuarioCidade']."/terca.xlsx")) 
							echo '<a class="login100-form-btn" href="'.$arquivos.'/terca.xlsx"> TERÇA-FEIRA </a>'; 
						else
							echo '<a class="login100-form-btn-dont"> TERÇA-FEIRA </a>'; 
						?>
					</div>

					<div class="container-login100-form-btn">
						<?php 
						if(file_exists($_SERVER['DOCUMENT_ROOT'].'/arquivos/call/'.$_SESSION['usuarioCidade'].'/quarta.xlsx')) 
							echo '<a class="login100-form-btn" href="'.$arquivos.'/quarta.xlsx"> QUARTA-FEIRA </a>'; 
						else
							echo '<a class="login100-form-btn-dont"> QUARTA-FEIRA </a>'; 
						?>
					</div>

					<div class="container-login100-form-btn">
						<?php 
						if(file_exists($_SERVER['DOCUMENT_ROOT'].'/arquivos/call/'.$_SESSION['usuarioCidade']."/quinta.xlsx")) 
							echo '<a class="login100-form-btn" href="'.$arquivos.'/quinta.xlsx"> QUINTA-FEIRA </a>'; 
						else
							echo '<a class="login100-form-btn-dont"> QUINTA-FEIRA </a>'; 
						?>
					</div>

					<div class="container-login100-form-btn">
						<?php 
						if(file_exists($_SERVER['DOCUMENT_ROOT'].'/arquivos/call/'.$_SESSION['usuarioCidade']."/sexta.xlsx")) 
							echo '<a class="login100-form-btn" href="'.$arquivos.'/sexta.xlsx"> SEXTA-FEIRA </a>'; 
						else
							echo '<a class="login100-form-btn-dont"> SEXTA-FEIRA </a>'; 
						?>
					</div>
	        <?php
	            }else if($_SESSION['usuarioNiveisAcessoId']=='0'){
	            	if(isset($_GET["tipo"]))
	            		echo '<a href="/adv/" class="voltarlink">< VOLTAR</a><br><br>';

	            	include 'admin.php';
	            }
			?>

			<div class="text-center p-t-136">
						<hr>
						<a class="buttonsair" href="/adv/login/sair.php">
							SAIR
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
						<br>
						<?php 
							$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
							$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
							$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
							$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
							$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
							$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");

							if($iphone || $android || $palmpre || $ipod || $berry || $ipad == true) {

							}else{
								echo '<a class="txt2" href="http://newjud.com">
										ACESSAR O SISTEMA ANTIGO
										<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
									</a>';
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>