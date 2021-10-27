<?php 
	include_once("viewHead.php");

	$idUsuario = $_SESSION['id'];

	include_once("../Model/modelBancoDeDados.php");	
	include_once("../Model/modelVerificaDadosFamilia.php");
?>

<section class="form-info-baba container-principal">
	
	<form class="input-info" action="../Model/modelEditarPerfilBaba.php" method="POST">
		<div class="input-info-wrapper">
			<div>
				<h2>Seus filhos podem ser: </h2>

				<input type="checkbox" name="tarefa-simples" value="1"
				<?php if (isset($totalDadosBaba[0]['pers_agitado_familia']) && $totalDadosBaba[0]['pers_agitado_familia'] == '1'){ ?>checked='checked'<?php }?>
				>
				<label>Tarefas simples</label>		
				<br>
				<input type="checkbox" name="fazer-compras" value="1"
				<?php if (isset($totalDadosBaba[0]['pers_tranquilo_compras_familia']) && $totalDadosBaba[0]['pers_tranquilo_familia'] == '1'){ ?>checked='checked'<?php }?>
				>
				<label>Fazer compras</label>
				<br>
				<input type="checkbox" name="cozinhar" value="1"
				<?php if (isset($totalDadosBaba[0]['pers_brincar_familia']) && $totalDadosBaba[0]['pers_brincar_familia'] == '1'){ ?>checked='checked'<?php }?>
				>
				<label>Cozinhar</label>
				<br>
				<input type="checkbox" name="licao-casa" value="1"
				<?php if (isset($totalDadosBaba[0]['pers_desenhos_familia']) && $totalDadosBaba[0]['pers_desenhos_familia'] == '1'){ ?>checked='checked'<?php }?>
				>
				<label>Lição de casa</label>
				
			</div>		
			
			<div>
				<h2>Descrição:</h2>
				<textarea name="formacao"><?php 
						if(isset($totalDadosBaba[0]['descricao_familia'])){ 
							echo $totalDadosBaba[0]['descricao_familia'];
						}?></textarea>
				<br><br>

				<h2>Cuidados especiais?</h2>
				<input onchange="mostrarDesc('sim')" type="radio" name="cuidados-especiais" value="sim">Sim
				<input onchange="mostrarDesc('nao')" style="margin-left: 20px" type="radio" name="cuidados-especiais" value="nao">Não
				<br><br>
				<div class="descricao-familia">
					<textarea name="descricao"><?php 
							if(isset($totalDadosFamilia[0]['cuidados_familia'])){ 
								echo $totalDadosFamilia[0]['cuidados_familia'];
							}?></textarea>
				</div>

				<br><br>
			</div>
		</div>
		<br><br>
		<div class="botao-envia-formulario">
			<button>SALVAR</button>
		</div>
	</form>

</section><!-- FIM FORM-INFO-BABA -->

<script type="text/javascript">
	function mostrarDesc(opcaoEscolhida){
		if(opcaoEscolhida == 'sim'){
			$('.descricao-familia').slideToggle();
		}
		else{
			$('.descricao-familia').css('display', 'none');	
		}

	}
</script>