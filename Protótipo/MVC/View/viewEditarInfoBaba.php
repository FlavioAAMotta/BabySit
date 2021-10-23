<?php 
	include_once("viewHead.php");
	include_once("../Model/modelBancoDeDados.php");	
	include_once("../Model/modelVerificaDadosBaba.php");

	$idUsuario = $_SESSION['id'];
?>

<section class="form-info-baba container-principal">
	
	<form class="input-info" action="../Model/modelEditarPerfilBaba.php" method="POST">
		<div class="input-info-wrapper">
			<div>
				<h2>Experiências</h2> 
				
				<input type="checkbox" name="bebe" 
				<?php if (isset($totalDadosBaba[0]['exp_bebe_baba']) && $totalDadosBaba[0]['exp_bebe_baba'] == 1){ ?>checked='checked'<?php }?>
				>
				<label>Bebê</label>
				
				<input type="checkbox" name="crianca">
				<label>Criança</label>
				
				<input type="checkbox" name="jovem">		
				<label>Jovem</label>

				<br><br>

				<h2>Linguas:</h2>
				<textarea name="linguas"></textarea>
				<br>
				<br>
				<br>

				<h2>Pode ajudar com: </h2>

				<input type="checkbox" name="tarefa-simples">
				<label>Tarefas simples</label>		
				<br>
				<input type="checkbox" name="fazer-compras">
				<label>Fazer compras</label>
				<br>
				<input type="checkbox" name="cozinhar">
				<label>Cozinhar</label>
				<br>
				<input type="checkbox" name="licao-casa">
				<label>Lição de casa</label>
				
			</div>		
			
			<div>
				<h2>Formação:</h2>
				<textarea name="formacao"><?php echo "teste" ?></textarea>
				<br><br>
				<h2>Descricao:</h2>
				<textarea name="descricao"></textarea>
				<br><br>
				<h2>Valor/Hora:</h2>
				<input type="number" min="1" step="any" name="valor-hora">

				<br><br>
			</div>
		</div>
		<br><br>
		<div class="botao-envia-formulario">
			<button>SALVAR</button>
		</div>
	</form>

</section><!-- FIM FORM-INFO-BABA -->