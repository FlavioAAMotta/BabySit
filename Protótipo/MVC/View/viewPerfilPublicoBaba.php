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
		<img src="../../images/perfilPublico/perfilimg.jpg" alt="Foto do perfil publico" id="PerfilImage"  height="230px" width="80%" align="center">
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
				<p>&emsp;Olá meu nome é Katarina, sou formada em Pedagogia,tenho experiência como babá e 31 anos,
					 sou casada, adoro brincar, ensinar crianças,fazer atividades educativas e divertidas, atividades 
					 para estimnular seu desenvolvimento motor e cognitivo.<br></p>

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
			<p class="negrito">Experiência: 1 ano</p>
			
		</div>
		<div class="col-sm-2">
			<p class="negrito">Línguas: Português/Espanhol</p>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-2">
			<img src="../../images/perfilPublico/expPerfil.jpg">
		</div>	
	</div>

	<div class="row">
		
		<div class="col-sm-2">
			<p class="negrito"><br><br>Pode ajudar com:</p>
		</div>
	</div>

	<div class="row">
		<div class="form-check">
			<p>&emsp;<input class ="form-check-input" type="checkbox" name="podeAjudar" value="Tarefas simples" id="podeAjudar">
			<label class="form-check-label" for="podeAjudar">
				Tarefas simples</p>
			</label> 
		</div>
	</div>

	<div class="row">
		<div class="form-check">
			<p>&emsp;<input class ="form-check-input" type="checkbox" name="podeAjudar" value="cozinhar" id="podeAjudar">
			<label class="form-check-label" for="podeAjudar">
				Cozinhar</p>
			</label> 
		</div>
	</div>

	<div class="row">
		<div class="form-check">
			<p>&emsp;<input class ="form-check-input" type="checkbox" name="podeAjudar" value="licaoCasa" id="podeAjudar">
			<label class="form-check-label" for="podeAjudar">
				Lição de casa</p>
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
			<h3>&emsp;Disponibilidade:</h3>
			<p><br></p>
			<img src="../../images/perfilPublico/quadroDisponibilidade.jpg">
			
		</div>
	</div>

	<div class="row">
		<div class="col-sm-5">
			<p><br></p>
			<img src="../../images/perfilPublico/line.jpg">
		</div>
	</div>

	<div class="row">
		<div class="col-sm-4">
			<h3>Avaliações</h3>
			<p><br></p>
			<img src="../../images/perfilPublico/quadroAvaliacoes.jpg">
		</div>
	</div>
</section>

<?php
	include_once("viewFooter.<php");
?>