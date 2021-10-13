<?php
	include_once("viewHead.php");
	#include_once("../Model/modelBancoDeDados.php");
	#include_once("../Model/modelCadastroUsuario.php");
?>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"><!--Bootstrap-->
	<link rel="stylesheet" type="text/css" href="../../css/perfilPublic.css">
</head>


<body>
	<div class= "row">
		<br><br><br><br>
	</div>
	<div class = "row">
		<img src="../../images/perfilPublicoPais/perfilImgPais.jpg" alt="Foto do perfil publico" id="PerfilImage"  height="230px" width="80%" align="center">
		<br><br>
	</div>
</body>
<section class="perfil-publico">
	
	<div class= "row">
		<br><br>
	</div>
	<div class="row">
		<div class="row">
				
			<div class="col-sm-4">
			
				<h3>&emsp;Descrição:</h3>
				<p>&emsp;Buscamos uma babá para ficar com o nosso filho durante a semana, no período
					da tarde, ele é um pouco agitado e gosta de brincar. Eu e meu marido trabalhamos de casa, entretanto não podemos fornecer a atenção necessária devido ao home office.<br></p>

			</div>
			<div class="col-sm-4"></div>
			<div class="col">
				<img src="../../images/perfilPublico/entrarContato.jpg">
			</div>
		</div>

		
	</div>

	<div class="row">	
		<div class="col-sm-5">
			<img src="../../images/perfilPublico/line.jpg">

		</div>
	</div>

	<div class="row">

		<div class="col-sm-2">
			<p class="negrito">Filhos:</p>
			<img src="../../images/perfilPublicoPais/filhosPais.jpg">
		</div>

		<div class="col-sm-2">
			<p class="negrito">Cuidados Especiais:</p>
			<p class="negrito">Nenhum</p>
		</div>

	</div>

	<div class="row">
		<div class="col-sm-2">
			
		</div>	
	</div>

	<div class="row">
		
		<div class="col-sm-2">
			<p class="negrito"><br><br>Características:</p>
		</div>
	</div>

	<div class="row">
		<div class="form-check">
			<p>&emsp;<input class ="form-check-input" type="checkbox" name="podeAjudar" value="Agitado" id="caracteristicas">
			<label class="form-check-label" for="caracteristicas">
				Agitado</p>
			</label> 
		</div>
	</div>

	<div class="row">
		<div class="form-check">
			<p>&emsp;<input class ="form-check-input" type="checkbox" name="podeAjudar" value="gostaBrincar" id="caracteristicas">
			<label class="form-check-label" for="caracteristicas">
				Gosta de brincar</p>
			</label> 
		</div>
	</div>

	
			
	<div class="row">	
		<div class="col-sm-5">
			<img src="../../images/perfilPublico/line.jpg">
		</div>
	</div>	
	
	<div class="row">
		<div class="col-sm-4">
			<p><br></p>
			<h3>&emsp;Solicita:</h3>
			<p><br></p>
			<img src="../../images/perfilPublicoPais/solicitaPais.jpg">
			
		</div>
	</div>

	<div class="row">
		<div class="col-sm-5">
			<p><br></p>
			<img src="../../images/perfilPublico/line.jpg">
		</div>
	</div>

	
</section>

<?php
	include_once("viewFooter.<php");
?>