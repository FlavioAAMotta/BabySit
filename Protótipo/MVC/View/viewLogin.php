<?php session_start();?>

<!DOCTYPE html>

<html>
		
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>	
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">	
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.0/slick-theme.css" rel="stylesheet"/>
		<script src="js/slick.js"></script>
		<link href="../../css/slick.css" rel="stylesheet"/>
		<script src="js/main.js"></script>	
		<link href="../../css/fontawesome.min.css" rel="stylesheet">
		<link href="../../css/all.css" rel="stylesheet">
		<link href="../../css/style.css" rel="stylesheet">
	</head>

	<body style="background-color: #ECECEC">

		<?php 
			include_once("../Model/modelBancoDeDados.php");			
			include_once("../Model/modelLogin.php");
		?>

		<section class="tela-login">
			<div class="login-box">
				<h2>Log in</h2>
				<form method="POST">
					<label>Email</label>
					<div class="input">
						<i style="margin-right: 15px;color: #2B2C30" class="fas fa-user"></i>
						<input type="text" name="login" placeholder="Digite seu email..." required><br>
					</div><br>
					<label>Senha</label>
					<div class="input">
						<i style="margin-right: 15px; color: #2B2C30" class="fas fa-lock"></i>
						<input type="password" name="senha" placeholder="Digite sua senha..." required>
					</div><br><br>

					<button>Entrar</button><br><br>
					<a href="viewCadastro.php" style="text-align: center">Ainda não tem uma conta? Clique aqui</a>
				</form>

				<?php 
					include_once("../Controller/controllerLogin.php");	
				?>

			</div>
		</section><!-- FIM TELA-LOGIN -->

	</body>

</html>