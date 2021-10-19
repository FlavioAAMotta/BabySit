<?php 
	include_once("viewHead.php");
	//include_once("../Model/modelBancoDeDados.php");	
?>

<section class="selecionar-perfil container-principal">
	<h2>Painel Administrativo</h2>
	<!--<h2>OLÁ <?php echo strtoupper($_SESSION['nome'])?></h2>-->
	<h2>OLÁ Flávio</h2>
	<h3>Selecione o perfil que deseja administrar</h3>

	<div class="selecionar-perfil-wrapper">
		<a href="viewPerfilPrivado.php?tipoPerfil=baba">
			<div class="selecionar-perfil-box">
				<img src="../../images/profile.png">
				<h2>Nome</h2>
				<p>Babá</p>
			</div>
		</a>

		<div class="divisor-perfil-box"></div>

		<a href="viewPerfilPrivado.php?tipoPerfil=familia">
			<div class="selecionar-perfil-box">
				<img src="../../images/profile.png">
				<h2>Nome</h2>
				<p>Família</p>
			</div>
		</a>
	</div>
</section><!-- FIM SELECIONAR-PERFIL -->

<?php 
	include_once("viewFooter.php");	
?>