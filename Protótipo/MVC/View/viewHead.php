<?php 
	session_start();
?>

<!DOCTYPE html>

<html lang="pt-BR">

	<head>
		<title>Painel Administrativo</title>
		<meta charset="utf-8">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="../../js/main.js"></script>	
		<script src="https://code.jquery.com/jquery-1.10.0.min.js"></script>
		<script src="https://rawgit.com/RobinHerbots/Inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
		<link href="../../css/fontawesome.min.css" rel="stylesheet">
		<link href="../../css/all.css" rel="stylesheet">
		<link href="../../css/style-pa.css" rel="stylesheet">
	</head>

	<body>		

		<header>			
			
			<div class="nav-bar container-principal">
				<a href="viewHome.php"><img src="../../images/logo.png"></a>
				<div id="minha-conta">
					<div class="minha-conta">
						<a  href="viewLogin.php">Minha conta</a>					
					</div>

					<div class="menu-minha-conta">
						<ul>
							<li>Cadastrar serviço</li>
							<li>Editar informações</li>
							<li>Sair</li>
						</ul>
					</div>
				</div>
			</div>
			
		</header><!-- FIM DO HEADER -->

		<script>

			$('#minha-conta').mouseover(function(){
				$('.menu-minha-conta').css('display', 'block');	
			});

			$('.menu-minha-conta').mouseover(function(){
				$('.menu-minha-conta').css('display', 'block');	
			});

			$('#minha-conta').mouseleave(function(){
				$('.menu-minha-conta').css('display', 'none');	
			})
			
		</script>