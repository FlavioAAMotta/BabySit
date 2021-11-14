<?php 
	session_start();

	include_once("../Model/modelBancoDeDados.php");

	if(!empty($_SESSION['id-usuario-logado'])){
		$idUsuario = $_SESSION['id-usuario-logado'];
		include_once("../Model/modelVerificaUsuarios.php");	
	}	
	
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>BabyCare</title>
</head>

<body>
	

	<section class="nav-menu-wrapper">
		<div class="nav-menu container-principal">

			<a href="viewHome.php"><img src="../../images/logo.png"></a>
			<div style="display: flex">
				<div class="menu-desktop">
					<ul class="lista-menu-principal">
						<li id="sub-lista">
							Como funciona ▼
							<ul class="lista-sub-menu">
								<li><a href="viewBaba.php">Sou babá</a></li>
								<li><a href="viewPais.php">Sou pai</a></li>
							</ul>
						</li>
						<li><a href="viewVisualizarPais.php">Serviços</a></li>
						<li><a href="viewCadastro.php">Cadastro</a></li>
					</ul>
				</div>
				
				<div class="minha-conta">
					<?php 
						if(!empty($_SESSION['id-usuario-logado'])){
							if($totalUsuarios[0]['logado_usuario'] == 1){
					?>
					<a  href="viewSelecionarPerfil.php">Minha Conta</a>
					<?php }else{?>
					<a  href="viewLogin.php">Log in</a>					

					<?php }}?>
				</div>
			</div>
		</div><!-- FIM NAV-MENU-DESKTOP -->
	</section> 
	<div style="height: 50px"></div>
	<script>
		$('#sub-lista').click(function(){
			$('.lista-sub-menu').slideToggle();
		});
	</script>