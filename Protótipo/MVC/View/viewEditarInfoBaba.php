<?php 
	include_once("viewHead.php");

	$idUsuario = $_SESSION['id'];

	include_once("../Model/modelBancoDeDados.php");	
	include_once("../Model/modelVerificaDadosBaba.php");
?>

<section class="form-info-baba container-principal">
	
	<form class="input-info" action="../Model/modelEditarPerfilBaba.php" method="POST">
		<div class="input-info-wrapper">
			<div>
				<h2>Experiências</h2> 
				
				<input type="checkbox" name="bebe" value="1"
				<?php if (isset($totalDadosBaba[0]['exp_bebe_baba']) && $totalDadosBaba[0]['exp_bebe_baba'] == '1'){ ?>checked='checked'<?php }?>
				>
				<label>Bebê</label>
				
				<input type="checkbox" name="crianca" value="1"
				<?php if (isset($totalDadosBaba[0]['exp_crianca_baba']) && $totalDadosBaba[0]['exp_crianca_baba'] == '1'){ ?>checked='checked'<?php }?>
				>
				<label>Criança</label>
				
				<input type="checkbox" name="jovem" value="1"
				<?php if (isset($totalDadosBaba[0]['exp_jovem_baba']) && $totalDadosBaba[0]['exp_jovem_baba'] == '1'){ ?>checked='checked'<?php }?>
				>		
				<label>Jovem</label>

				<br><br>

				<input style="width: 100px" placeholder="Meses" type="number" name="exp-meses"
				<?php if(isset($totalDadosBaba[0]['exp_meses_baba'])){?>
					value="<?php echo $totalDadosBaba[0]['exp_meses_baba']?>"
				<?php }?>
				>


				<input style="width: 100px" placeholder="Anos" type="number" name="exp-anos"
				<?php if(isset($totalDadosBaba[0]['exp_anos_baba'])){?>
					value="<?php echo $totalDadosBaba[0]['exp_anos_baba']?>"
				<?php }?>
				>

				<br><br>

				<h2>Linguas:</h2>
				<textarea name="linguas"><?php 
						if(isset($totalDadosBaba[0]['linguas_baba'])){ 
							echo $totalDadosBaba[0]['linguas_baba'];
						}?></textarea>
				<br>
				<br>
				<br>

				<h2>Pode ajudar com: </h2>

				<input type="checkbox" name="tarefa-simples" value="1"
				<?php if (isset($totalDadosBaba[0]['ajuda_tarefa_baba']) && $totalDadosBaba[0]['ajuda_tarefa_baba'] == '1'){ ?>checked='checked'<?php }?>
				>
				<label>Tarefas simples</label>		
				<br>
				<input type="checkbox" name="fazer-compras" value="1"
				<?php if (isset($totalDadosBaba[0]['ajuda_compras_baba']) && $totalDadosBaba[0]['ajuda_compras_baba'] == '1'){ ?>checked='checked'<?php }?>
				>
				<label>Fazer compras</label>
				<br>
				<input type="checkbox" name="cozinhar" value="1"
				<?php if (isset($totalDadosBaba[0]['ajuda_cozinhar_baba']) && $totalDadosBaba[0]['ajuda_cozinhar_baba'] == '1'){ ?>checked='checked'<?php }?>
				>
				<label>Cozinhar</label>
				<br>
				<input type="checkbox" name="licao-casa" value="1"
				<?php if (isset($totalDadosBaba[0]['ajuda_licao_baba']) && $totalDadosBaba[0]['ajuda_licao_baba'] == '1'){ ?>checked='checked'<?php }?>
				>
				<label>Lição de casa</label>
				
			</div>		
			
			<div>
				<h2>Formação:</h2>
				<textarea name="formacao"><?php 
						if(isset($totalDadosBaba[0]['formacao_baba'])){ 
							echo $totalDadosBaba[0]['formacao_baba'];
						}?></textarea>
				<br><br>
				<h2>Descricao:</h2>
				<textarea name="descricao"><?php 
						if(isset($totalDadosBaba[0]['descricao_baba'])){ 
							echo $totalDadosBaba[0]['descricao_baba'];
						}?></textarea>
				<br><br>
				<h2>Valor/Hora:</h2>
				<input type="number" min="1" step="any" name="valor-hora"
				<?php if(isset($totalDadosBaba[0]['valor_hora_baba'])){?>
					value="<?php echo $totalDadosBaba[0]['valor_hora_baba']?>"
				<?php }?>
				>

				<br><br>
			</div>
		</div>
		<br><br>
		<div class="botao-envia-formulario">
			<button>SALVAR</button>
		</div>
	</form>

</section><!-- FIM FORM-INFO-BABA -->