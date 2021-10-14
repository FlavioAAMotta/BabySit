<?php
	include_once("viewHead.php");
	#include_once("../Model/modelBancoDeDados.php");
	#include_once("../Model/modelCadastroUsuario.php");
?>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"><!--Bootstrap-->
	<link rel="stylesheet" type="text/css" href="../../css/perfilPublic.css">
</head>


<div class= "row margem">
	<br><br><br><br>
</div>
<div class = "row margem">
	<img src="../../images/perfilPublicoPais/perfilImgPais.jpg" alt="Foto do perfil publico" id="PerfilImage"  height="230px" width="100%" align="center">
	<br><br>
</div>

<section class="perfil-publico">
	
	<div class= "row margem">
		<br><br>
	</div>
	<div class="row margem">
		<div class="row margem">
				
			<div class="col-sm-4 margem">
			
				<h3 class="negrito">&emsp;Descrição:</h3>
				<p class="justificado">&emsp;Buscamos uma babá para ficar com o nosso filho durante a semana, no período
					da tarde, ele é um pouco agitado e gosta de brincar. Eu e meu marido trabalhamos de casa, entretanto não podemos fornecer a atenção necessária devido ao home office.<br></p>

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
			<img src="../../images/perfilPublicoPais/filhosPais.jpg" width="100%">
		</div>

		<div class="col-sm-2 margem">
			<p class="negrito">Cuidados Especiais:</p>
			<p class="negrito">Nenhum</p>
		</div>

	</div>

	<div class="row margem">
		<div class="col-sm-2">
			
		</div>	
	</div>

	<div class="row">
		
		<div class="col-sm-2 margem">
			<p class="negrito"><br><br>Características:</p>
		</div>
	</div>

	<div class="row margem">
		<div class="form-check margem">
			<p>&emsp;<input class ="form-check-input" type="checkbox" name="podeAjudar" value="Agitado" id="caracteristicas">
			<label class="form-check-label" for="caracteristicas">
				Agitado</p>
			</label> 
		</div>
	</div>

	<div class="row margem">
		<div class="form-check margem">
			<p>&emsp;<input class ="form-check-input" type="checkbox" name="podeAjudar" value="gostaBrincar" id="caracteristicas">
			<label class="form-check-label" for="caracteristicas">
				Gosta de brincar</p>
			</label> 
		</div>
	</div>

	
			
	<div class="row margem">	
		<div class="col-sm-5 margem">
			<img src="../../images/perfilPublico/line.jpg" width="100%">
		</div>
	</div>	
	
	<div class="row margem">
		<div class="col-sm-4 margem">
			<p><br></p>
			<h3 class="negrito">&emsp;Solicita:</h3>
			<p><br></p>
			<img src="../../images/perfilPublicoPais/solicitaPais.jpg" width="100%">
			
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