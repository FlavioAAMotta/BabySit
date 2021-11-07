<?php
	$idUsuario = $_GET['idServico'];

	include_once("viewHeadPrincipal.php");
	include_once("../Model/modelBancoDeDados.php");
	include_once("../Model/modelServicos.php");
	include_once("../Model/modelVerificaUsuarios.php");
	include_once("../Model/modelVerificaDadosFamilia.php");
?>

<div class= "row margem container-principal">
	<br><br><br><br>
</div>

<div class="info-perfil-servico-wrapper">
	<div class="info-perfil-servico container-principal">
		<img src="<?php echo $totalUsuarios[0]['foto_usuario']?>" alt="Foto do perfil publico" id="PerfilImage" align="center">
		<br><br>

		<h2><b><?php echo $totalUsuarios[0]['nome_usuario']?></b></h2>
	</div>
</div>

<section class="perfil-publico container-principal">
	
	<div class= "row margem">
		<br><br>
	</div>
	<div class="row margem">
		<div class="row margem">
				
			<div class="col-sm-4 margem">
			
				<h3 class="negrito">&emsp;Descrição:</h3>
				<p class="justificado"><?php echo $totalDadosFamilia[0]['descricao_familia']?><br></p>

			</div>
			<div class="col-sm-4 margem"></div>
			<div class="col margem">
				<img src="../../images/perfilPublico/entrarContato.jpg" width="100%">
			</div>
		</div>
		
	</div>

	<div class="row margem">	
		<div class="col-sm-5 margem">
			<img src="../../images/perfilPublico/line.jpg" width="100%">

		</div>
	</div>

	<div class="row margem">

		<div class="col-sm-2 margem">
			<p class="negrito">Filhos:</p>
			<h4><?php echo $totalDadosFamilia[0]['filhos_familia']?></h4>
		</div>

		<div class="col-sm-2 margem">
			<p class="negrito">Cuidados Especiais:</p>
			<p class="negrito"><?php echo $totalDadosFamilia[0]['cuidados_familia']?></p>
		</div>

	</div>

	<div class="row">		
		<div class="col-sm-2 margem">
			<p class="negrito"><br><br>Características:</p>
		</div>
	</div>

	<input type="checkbox" onclick="return false;"
	<?php if (isset($totalDadosFamilia[0]['pers_agitado_familia']) && $totalDadosFamilia[0]['pers_agitado_familia'] == '1'){ ?>checked='checked'<?php }?>
	>
	<label>Agitados</label>
	<br>
	<input type="checkbox" onclick="return false;"
	<?php if (isset($totalDadosFamilia[0]['pers_tranquilo_familia']) && $totalDadosFamilia[0]['pers_tranquilo_familia'] == '1'){ ?>checked='checked'<?php }?>
	>
	<label>Tranquilos</label>
	<br>
	<input type="checkbox" onclick="return false;"
	<?php if (isset($totalDadosFamilia[0]['pers_brincar_familia']) && $totalDadosFamilia[0]['pers_brincar_familia'] == '1'){ ?>checked='checked'<?php }?>
	>
	<label>Gostam de brincar</label>
	<br>
	<input type="checkbox" onclick="return false;"
	<?php if (isset($totalDadosFamilia[0]['pers_desenhos_familia']) && $totalDadosFamilia[0]['pers_desenhos_familia'] == '1'){ ?>checked='checked'<?php }?>
	>
	<label>Gostam de assistir desenhos</label>	
			
	<div class="row margem">	
		<div class="col-sm-5 margem">
			<img src="../../images/perfilPublico/line.jpg" width="100%">
		</div>
	</div>	
	
	<div class="row margem servico-textarea">
		<div class="col-sm-4 margem">
			<h3 class="negrito">&emsp;Solicita:</h3>
			<textarea><?php echo $totalDadosFamilia[0]['horario_familia']?></textarea>
			
		</div>
	</div>

	<div class="row margem">
		<div class="col-sm-5 margem">
			<p><br></p>
			<img src="../../images/perfilPublico/line.jpg" width="100%">
		</div>
	</div>

	
</section>



<?php
	include_once("viewFooter.<php");

?>