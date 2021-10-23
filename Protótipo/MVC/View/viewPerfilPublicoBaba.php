<?php
	include_once("viewHead.php");
	include_once("../Model/modelBancoDeDados.php");
	include_once("../Model/modelCadastroUsuario.php");
?>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"><!--Bootstrap-->
	<link rel="stylesheet" type="text/css" href="../../css/perfilPublic.css">
</head>

<div class= "row margem" >
	<br><br><br><br>
</div>
<div class = "row margem">
	<img  src="../../images/perfilPublico/perfilimg.jpg" alt="Foto do perfil publico" id="PerfilImage"  height="230px" width="100%" align="center">
	<br><br>
</div>

<section class="perfil-publico">
	
	<div class= "row margem">
		<br><br>
	</div>
	<div class="row margem">
		<div class="row margem">
				
			<div class="col-sm-4"> 
			
				<h3 class="negrito">&emsp;Descrição:</h3>
				<p class="justificado">&emsp;Olá meu nome é Katarina, sou formada em Pedagogia,tenho experiência como babá e 31 anos,
					 sou casada, adoro brincar, ensinar crianças,fazer atividades educativas e divertidas, atividades 
					 para estimnular seu desenvolvimento motor e cognitivo.<br></p>

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
			<p class="negrito">Experiência: 1 ano</p>
			
		</div>
		<div class="col-sm-2 margem">
			<p class="negrito">Línguas: Português/Espanhol</p>
		</div>
	</div>

	<div class="row margem">
		<div class="col-sm-2 margem">
			<img src="../../images/perfilPublico/expPerfil.jpg" width="100%">
		</div>	
	</div>

	<div class="row margem">
		
		<div class="col-sm-2 margem">
			<p class="negrito"><br><br>Pode ajudar com:</p>
		</div>
	</div>

	<div class="row margem">
		<div class="form-check margem">
			<p>&emsp;<input class ="form-check-input" type="checkbox" name="podeAjudar" value="Tarefas simples" id="podeAjudar">
			<label class="form-check-label" for="podeAjudar">
				Tarefas simples</p>
			</label> 
		</div>
	</div>

	<div class="row margem">
		<div class="form-check margem">
			<p>&emsp;<input class ="form-check-input" type="checkbox" name="podeAjudar" value="cozinhar" id="podeAjudar">
			<label class="form-check-label" for="podeAjudar">
				Cozinhar</p>
			</label> 
		</div>
	</div>

	<div class="row margem">
		<div class="form-check margem">
			<p>&emsp;<input class ="form-check-input" type="checkbox" name="podeAjudar" value="licaoCasa" id="podeAjudar">
			<label class="form-check-label" for="podeAjudar">
				Lição de casa</p>
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
			<h3 class="negrito">&emsp;Disponibilidade:</h3>
			<p><br></p>
			<img src="../../images/perfilPublico/quadroDisponibilidade.jpg" width="100%">
			
		</div>
	</div>

	<div class="row margem">
		<div class="col-sm-5" class="borda">
			<p><br></p>
			<img src="../../images/perfilPublico/line.jpg" width="100%">
		</div>
	</div>

	<div class="row margem">
		<div class="col-sm-4" class="borda">
			<h3 class="negrito">Avaliações</h3>
			<p><br></p>
			<img src="../../images/perfilPublico/quadroAvaliacoes.jpg" width="100%">
		</div>
	</div>
</section>

<?php
	include_once("viewFooter.<php");
?>