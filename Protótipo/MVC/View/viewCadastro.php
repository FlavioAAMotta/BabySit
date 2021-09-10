<?php session_start();?>

<!DOCTYPE html>

<html>
		
	<head>
		<title>Sign-Up</title>
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>	
		<link href="../../css/fontawesome.min.css" rel="stylesheet">
		<link href="../../css/all.css" rel="stylesheet">
		<link href="../../css/style.css" rel="stylesheet">
	</head>

	<body style="background-color: #ECECEC">

		<?php 
			include_once("../Model/modelBancoDeDados.php");
			include_once("../Model/modelLogin.php"); 
		?>

		<section class="tela-cadastro">
			<div class="cadastro-box">
				<h2>Sign Up</h2>
				<p>Preencha todos os campos para realizar seu cadastro</p>

				<form method="POST">
					
					<div class="input-box">
						<div>
							<label>Nome</label><br>
							<input type="text" name="nome-usuario" placeholder="Digite seu primeiro nome..." required><br>
						</div>

						<div class="input-direita">
							<label>Sobrenome</label><br>
							<input type="text" name="sobrenome-usuario" placeholder="Digite seu sobrenome..." required><br>
						</div>
					</div>

					<br>

					<div class="input-box">
						<div>
							<label>CPF</label><br>
							<input type="text" id="frmCpf" name="cpf-usuario" placeholder="___.___.___-__" required  pattern="[0-9]+$" ><br>
						</div>

						<div class="input-direita">
							<label>Data de Nascimento</label><br>
							<input type="date" name="data-usuario" required><br>
						</div>
					</div><br>

					<div class="input-box">
						<div>
							<label>Endereço</label><br>
							<input type="text" name="endereco-usuario" placeholder="Digite seu endereço..." required><br>
						</div>

						<div class="input-direita">
							<label>Complemento</label><br>
							<input type="text" name="complemento-usuario" placeholder="Informações extras..." required><br>
						</div>
					</div><br>

					<div class="input-box">
						<div>
							<label>CEP</label><br>
							<input type="text" name="cep-usuario" placeholder="Digite seu CEP..." required><br>
						</div>

						<div class="input-direita">
							<label>Telefone</label><br>
							<input type="text" id="frmTel" name="telefone-usuario" placeholder="(xx)xxxxx-xxxx" required><br>
						</div>
					</div><br>
					
					<div>
						<label>Sexo: </label>
						<input type="radio" name="sexo-usuario" required value="Feminino">
						<label>Masculino</label>
						<input type="radio" name="sexo-usuario" required value="Masculino">
						<label>Feminino</label>
						<input type="radio" name="sexo-usuario" required value="outro">
						<label>Outro</label>
					</div><br>

					<div class="input-box">
						<div>
							<label>Email</label><br>
							<input type="text" name="email-usuario" placeholder="Digite seu email..." required><br>
						</div>

						<div class="input-direita">
							<label>Senha</label><br>
							<input type="password" name="senha-usuario" placeholder="Digite sua senha..." required><br>
						</div>
					</div><br>

					<div class="confirma-cadastro">
						<button>Cadastrar</button><br>
						<a href="login-adm.php" style="text-align: center">Já tem uma conta? Clique aqui</a>
					</div>
				</form>

			</div>
		</section><!-- FIM TELA-CADASTRO -->

		<script type="text/javascript">
			$("#frmCpf").inputmask({
			  mask: "999.999.999-99"
			});

			$("#frmTel").inputmask({
			  mask: "(99)99999-9999"
			});
		</script>
	</body>

</html>