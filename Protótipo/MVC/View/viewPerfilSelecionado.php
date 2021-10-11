<?php 
	include_once("viewHead.php");
	//include_once("../Model/modelBancoDeDados.php");	
?>

<section class="editar-info-perfil">
	
	<?php 
		/*if($_GET['perfil'] == 'baba'){
			echo "Perfil escolhido: baba";
		}
		else{
			echo "Perfil escolhido: família";	
		}*/
	?>

	<h2>Edite suas informações pessoais</h2>
	<p>Edite suas informações pessoais caso tenha mudado ou adicione</p>

	<div class="formulario-editar-perfil">
		<form method="POST" action="">
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
					<input type="text" id="frmTel1" name="telefone-usuario" placeholder="(xx)xxxxx-xxxx" required><br>
				</div>
			</div><br>

			<div class="input-box">
				<div>
					<label>Email</label><br>
					<input type="text" name="email-usuario" placeholder="Digite seu email..." required><br>
				</div>

				<div class="input-direita">
					<label>Telefone 2</label><br>
					<input type="text" id="frmTel2" name="telefone2-usuario" placeholder="(xx)xxxxx-xxxx" required><br>
				</div>
			</div>

			<div class="confirma-editar">
				<button>Enviar</button><br>
			</div>
		</form>
	</div><!-- FIM FORMULAR-EDITAR-PERFIL -->

</section>

<script type="text/javascript">
	$("#frmCpf").inputmask({
	  mask: "999.999.999-99"
	});

	$("#frmTel1").inputmask({
	  mask: "(99)99999-9999"
	});

	$("#frmTel2").inputmask({
	  mask: "(99)99999-9999"
	});
</script>

<?php 
	include_once("viewFooter.php");	
?>