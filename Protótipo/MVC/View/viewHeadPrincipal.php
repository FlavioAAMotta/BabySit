<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Página dos pais</title>
</head>

<body>

	<section class="nav-menu">
		<h1><a href="viewHome.php">LOGO</a></h1>	
		<div class="menu-desktop">
			<ul class="lista-menu-principal">
				<li id="sub-lista">
					Como funciona ▼
					<ul class="lista-sub-menu">
						<li><a href="viewBaba.php">Sou babá</a></li>
						<li><a href="viewPais.php">Sou pai</a></li>
					</ul>
				</li>
				<li>Babás</li>
				<li>Cadastro</li>
			</ul>
		</div>
		
		<div class="minha-conta">
			<a href="viewLogin.php"><h2>Minha conta</h2></a>
		</div>
	</section><!-- FIM NAV-MENU-DESKTOP -->

	<script>
		$('#sub-lista').click(function(){
			$('.lista-sub-menu').slideToggle();
		});
	</script>