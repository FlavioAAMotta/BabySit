<?php 
	include_once("viewHead.php");

	$idUsuario = $_SESSION['id'];

	include_once("../Model/modelBancoDeDados.php");	
	include_once("../Model/modelVerificaDadosFamilia.php");
?>

<section class="form-info-baba container-principal">
	
	<form class="input-info" action="../Model/modelEditarPerfilFamilia.php" method="POST">
		<div class="input-info-wrapper">
			<div>
				<h2>Seus filhos podem ser: </h2>

				<input type="checkbox" name="agitados" value="1"
				<?php if (isset($totalDadosFamilia[0]['pers_agitado_familia']) && $totalDadosFamilia[0]['pers_agitado_familia'] == '1'){ ?>checked='checked'<?php }?>
				>
				<label>Agitados</label>		
				<br>
				<input type="checkbox" name="tranquilos" value="1"
				<?php if (isset($totalDadosFamilia[0]['pers_tranquilo_compras_familia']) && $totalDadosFamilia[0]['pers_tranquilo_familia'] == '1'){ ?>checked='checked'<?php }?>
				>
				<label>Tranquilos</label>
				<br>
				<input type="checkbox" name="brincar" value="1"
				<?php if (isset($totalDadosFamilia[0]['pers_brincar_familia']) && $totalDadosFamilia[0]['pers_brincar_familia'] == '1'){ ?>checked='checked'<?php }?>
				>
				<label>Gostam de brincar</label>
				<br>
				<input type="checkbox" name="desenhos" value="1"
				<?php if (isset($totalDadosFamilia[0]['pers_desenhos_familia']) && $totalDadosFamilia[0]['pers_desenhos_familia'] == '1'){ ?>checked='checked'<?php }?>
				>
				<label>Gostam de assistir desenhos</label>

				<br><br>

				<h2>Filhos:</h2>
				<textarea name="filhos-familia"><?php 
						if(isset($totalDadosFamilia[0]['filhos_familia'])){ 
							echo $totalDadosFamilia[0]['filhos_familia'];
						}?></textarea>	

				<br><br>

				<h2>Cuidados especiais?</h2>
				<input onchange="mostrarDesc('sim')" type="radio" name="cuidados-especiais" value="sim">Sim
				<input onchange="mostrarDesc('nao')" style="margin-left: 20px" type="radio" name="cuidados-especiais" value="nao">Não
				<br><br>
				<div class="descricao-familia">
					<textarea name="cuidados-familia"><?php 
							if(isset($totalDadosFamilia[0]['cuidados_familia'])){ 
								echo $totalDadosFamilia[0]['cuidados_familia'];
							}?></textarea>
				</div>		
			</div>		
			
			<div>			

				<h2>Horário do serviço:</h2>
				<textarea name="horario-familia"><?php 
						if(isset($totalDadosFamilia[0]['horario_familia'])){ 
							echo $totalDadosFamilia[0]['horario_familia'];
						}?></textarea>	

				<br><br>

				<h2>Descrição:</h2>
				<textarea name="desc-familia"><?php 
						if(isset($totalDadosFamilia[0]['descricao_familia'])){ 
							echo $totalDadosFamilia[0]['descricao_familia'];
						}?></textarea>
				<br><br>

				<h2>Serviço ativo?</h2>
				<input type="radio" name="servico-ativo" value="1">Sim
				<input style="margin-left: 20px" type="radio" name="servico-ativo" value="0">Não
				
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