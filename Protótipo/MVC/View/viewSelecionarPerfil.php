<?php 
	include_once("viewHead.php");
	include_once("../Model/modelBancoDeDados.php");	

	$idUsuario = $_SESSION['id'];
	
	include_once("../Model/modelVerificaUsuarios.php");
?>

<section class="selecionar-perfil container-principal">
	<h2>Painel Administrativo</h2>
	<h2>OLÁ <?php echo strtoupper($_SESSION['nome'])?></h2>
	
	<h3>Selecione o perfil que deseja administrar</h3>

	<div class="selecionar-perfil-wrapper">
		<a href="viewPerfilPrivado.php?tipoPerfil=baba">
			<div class="selecionar-perfil-box">
				<?php if($totalUsuarios[0]['foto_usuario'] != null){ ?>
				<img src="<?php echo $totalUsuarios[0]['foto_usuario']?>"><br>
				<?php }else{?>
				<img src="../../images/profile.png"><br>
				<?php }?>
				<h2><?php echo strtoupper($_SESSION['nome'])?></h2>
				<p>Babá</p>
			</div>
		</a>

		<div class="divisor-perfil-box"></div>

		<a href="viewPerfilPrivado.php?tipoPerfil=familia">
			<div class="selecionar-perfil-box">
				<?php if($totalUsuarios[0]['foto_usuario'] != null){ ?>
				<img src="<?php echo $totalUsuarios[0]['foto_usuario']?>"><br>
				<?php }else{?>
				<img src="../../images/profile.png"><br>
				<?php }?>
				<h2><?php echo strtoupper($_SESSION['nome'])?></h2>
				<p>Família</p>
			</div>
		</a>
	</div>
</section><!-- FIM SELECIONAR-PERFIL -->

<?php 
	include_once("viewFooter.php");	
?>