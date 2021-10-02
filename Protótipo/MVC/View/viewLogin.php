<?php 
	include_once("viewHead.php");
	include_once("../Model/modelBancoDeDados.php");	
	include_once("../Model/modelLogin.php");
?>

<section class="tela-login">
	<div class="login-box">
		<h2>Entre</h2>
		<form method="POST">
			<label>Email</label>
			<div class="input">
				<i style="margin-right: 10px;color: #2B2C30" class="fas fa-user"></i>
				<input type="text" name="login" placeholder="Digite seu email..." required><br>
			</div><br>
			<label>Senha</label>
			<div class="input">
				<i style="margin-right: 10px; color: black" class="fas fa-lock"></i>
				<input type="password" name="senha" placeholder="Digite sua senha..." required>
			</div><br><br>

			<button>Entrar</button><br><br>
			<a href="viewCadastro.php" style="text-align: center">Ainda não tem uma conta? Clique aqui</a>
		</form>

		<br>
		
		<div style="text-align: center">
			<?php 
				include_once("../Model/modelLogin.php");
				include_once("../Controller/controllerLogin.php");	
			?>
		</div>

	</div>
</section><!-- FIM TELA-LOGIN -->

<?php 
	include_once("viewFooter.php");	
?>