<?php 
	include_once("viewHead.php");
	//include_once("../Model/modelBancoDeDados.php");	
	//include_once("../Model/modelCadastroUsuario.php"); 
?>

<section class="tela-cadastro">

	<div class="cadastro-box">
		<h2>Cadastre-se</h2>
		<p>Preencha todos os campos para realizar seu cadastro</p>

		<!--<form method="POST" action="../Model/modelCadastroUsuario.php">-->
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
					<input type="text" id="frmCpf" name="cpf-usuario" placeholder="___.___.___-__" required><br>
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
					<input type="text" name="complemento-usuario" placeholder="Informações extras..."><br>
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
				<input type="radio" name="sexo-usuario" required value="Masculino">
				<label>Masculino</label>
				<input type="radio" name="sexo-usuario" required value="Feminino">
				<label>Feminino</label>
				<input type="radio" name="sexo-usuario" required value="Outro">
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
				<a href="viewLogin.php" style="text-align: center">Já tem uma conta? Clique aqui</a>
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

<?php 
	include_once("viewFooter.php");	
?>