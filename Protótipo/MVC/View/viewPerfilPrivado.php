<?php 
	include_once("viewHead.php");

	$idUsuario = $_SESSION['id'];

	include_once("../Model/modelBancoDeDados.php");
	include_once("../Model/modelVerificaUsuarios.php");
	include_once("../Model/modelVerificaDadosBaba.php");	
?>

<section class="perfil-privado container-principal">
	
	<h2>Suas informações:</h2>
	<br>

	<?php if($_GET['tipoPerfil'] == 'baba'){?>
		<div class="info-perfil-wrapper">
			<div class="info-perfil-card">
				<div class="foto-perfil-box">
					<?php if($totalUsuarios[0]['foto_usuario'] != null){ ?>
					<img src="<?php echo $totalUsuarios[0]['foto_usuario']?>"><br>
					<?php }else{?>
					<img src="../../images/profile.png"><br>
					<?php }?>
					<form method="POST" action="../Model/modelFotoUsuario.php" enctype="multipart/form-data">
						<label id="botao-trocar-foto" for='fileToUpload'>Trocar foto</label>
						<input type="file" name="fileToUpload" id="fileToUpload">
						<br><br>
						<input id="botao-submit-foto" type="submit" value="Enviar">
					</form>
					<br><br>
				</div>

				<div class="data-perfil-box">
					<p>Data de nascimento: DD/MM/AAAA</p>
					<p>Data de registro: DD/MM/AAAA</p>
				</div>

				<div class="avaliacao-perfil-box">
					<p>Avaliação pessoal:</p>
					<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><span> (100 votos)</span>
				</div>
				<br><br>
				<a href="viewLogin.php">⟵ Log out</a>
			</div><!-- FIM DO INFO-PERFIL-CARD -->

			<div class="extra-info-perfil-box">
				<div class="exp-info-card">
					<p>Experiência:</p>
					<div class="icon-exp-wrapper">
						<?php if (isset($totalDadosBaba[0]['exp_bebe_baba']) && $totalDadosBaba[0]['exp_bebe_baba'] == '1'){
						?>
						<div class="icon-exp-box">
							<i class="fas fa-baby-carriage"></i>
							<p>Bebê</p>
						</div>

						<?php }else{?>

						<div class="icon-exp-box" style="background-color: rgba(255,255,255,0.3);">
							<i class="fas fa-baby-carriage"></i>
							<p>Bebê</p>
						</div>

						<?php }?>

						<?php if (isset($totalDadosBaba[0]['exp_crianca_baba']) && $totalDadosBaba[0]['exp_crianca_baba'] == '1'){
						?>

						<div class="icon-exp-box">
							<i class="fas fa-child"></i>
							<p>Criança</p>
						</div>

						<?php }else{?>

						<div class="icon-exp-box" style="background-color: rgba(255,255,255,0.3);">
							<i class="fas fa-child"></i>
							<p>Criança</p>
						</div>

						<?php }?>

						<?php if (isset($totalDadosBaba[0]['exp_jovem_baba']) && $totalDadosBaba[0]['exp_jovem_baba'] == '1'){
						?>

						<div class="icon-exp-box">
							<i class="fas fa-male"></i>
							<p>Jovem</p>
						</div>

						<?php }else{?>

						<div class="icon-exp-box" style="background-color: rgba(255,255,255,0.3);">
							<i class="fas fa-male"></i>
							<p>Jovem</p>
						</div>

						<?php }?>
						
					</div>
				</div>

				<p>Tempo de experiência:</p>
				<p><?php echo $totalDadosBaba[0]['experiencia_baba'] ?></p>

				<p>Linguas:</p>
				<p><?php echo $totalDadosBaba[0]['linguas_baba'] ?></p>
				<br>
				<div class="info-tarefas-perfil-box">
					<h4>Pode ajudar com:</h4>
					<br>
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
			</div><!-- FIM DO EXTRA-INFO-PERFIL-BOX -->

			<div class="extra-info-perfil-box">
				<div class="exp-info-formacao">
					<p>Formação</p>
					<textarea class="descricao-perfil-privado"><?php if (isset($totalDadosBaba[0]['formacao_baba'])){echo $totalDadosBaba[0]['formacao_baba'];}?></textarea>
					<br>
					<p>Descrição:</p>
					<textarea class="descricao-perfil-privado"><?php if (isset($totalDadosBaba[0]['descricao_baba'])){echo $totalDadosBaba[0]['descricao_baba'];}?></textarea>
					<br>
					<p>Valor/Hora</p>
					<p>R$ <?php if(isset($totalDadosBaba[0]['valor_hora_baba'])){echo number_format($totalDadosBaba[0]['valor_hora_baba'], 2, ",", ".");}?></p>
				</div>

			</div><!-- FIM DO EXTRA-INFO-PERFIL-BOX -->

		</div><!-- FIM DO INFO-PERFIL-WRAPPER -->

		<div class="info-perfil-disponibilidade-wrapper">
			<h4>Disponibilidade:</h4>
			<br>
			<div class="info-perfil-disponibilidade-card">
				<table>
					<tr>
						<th></th>
						<th>SE</th>
						<th>TE</th>
						<th>QU</th>
						<th>QU</th>
						<th>SE</th>
						<th>SÁ</th>
						<th>DO</th>
					</tr>

					<tr>
						<td>Manhã</td>
						<td><div class="check-info-perfil-disponibilidade"></div></td>
						<td><div class="check-info-perfil-disponibilidade"></div></td>
						<td><div class="check-info-perfil-disponibilidade"></div></td>
						<td><div class="check-info-perfil-disponibilidade"></div></td>
						<td><div class="check-info-perfil-disponibilidade"></div></td>
						<td><div class="check-info-perfil-disponibilidade"></div></td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
					</tr>

					<tr>
						<td>Tarde</td>
						<td><div class="check-info-perfil-disponibilidade"></div></td>
						<td><div class="check-info-perfil-disponibilidade"></div></td>
						<td><div class="check-info-perfil-disponibilidade"></div></td>
						<td><div class="check-info-perfil-disponibilidade"></div></td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
					</tr>

					<tr>
						<td>Noite</td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
					</tr>
				</table>
			</div>
		</div>

		<a href="viewEditarInfoBaba.php">Editar informações</a>
	<?php }else{?>
		<div class="info-perfil-wrapper">
			<div class="info-perfil-card">
				<div class="foto-perfil-box">
					<img src="../../images/profile.png"><br>
					<button>Trocar foto</button>
					<br><br>
				</div>

				<div class="data-perfil-box">
					<p>Data de nascimento: DD/MM/AAAA</p>
					<p>Data de registro: DD/MM/AAAA</p>
				</div>

				<div class="avaliacao-perfil-box">
					<p>Avaliação pessoal:</p>
					<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><span> (100 votos)</span>
				</div>
				<br><br>
				<a href="viewLogin.php">⟵ Log out</a>
			</div><!-- FIM DO INFO-PERFIL-CARD -->

			<div class="extra-info-perfil-box">
				
				<div class="info-tarefas-perfil-box">
					<h4>Seus filhos podem ser:</h4>
					<br>
					<input type="checkbox" checked onclick="return false;"/>
					<label>Agitados</label>
					<br>
					<input type="checkbox" onclick="return false;"/>
					<label>Tranquilos</label>
					<br>
					<input type="checkbox" checked onclick="return false;"/>
					<label>Gostam de brincar</label>
					<br>
					<input type="checkbox" checked onclick="return false;"/>
					<label>Gostam de assistir desenhos</label>
				</div>
			</div><!-- FIM DO EXTRA-INFO-PERFIL-BOX -->

			<div class="extra-info-perfil-box">
				<div class="exp-info-formacao">
					<p>Descrição:</p>
					<textarea class="descricao-perfil-privado">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum, justo vitae congue finibus.</textarea>
					<br>
					<p>Cuidados especiais?</p>
					<div>					
						<input type="checkbox" checked onclick="return false">
						<label>Sim</label>

						<input type="checkbox" onclick="return false" style="margin-left: 20px">
						<label>Não</label>
					</div>
					<textarea class="descricao-perfil-privado">Digite os cuidados que deverão ser seguidos...</textarea>
				</div>

			</div><!-- FIM DO EXTRA-INFO-PERFIL-BOX -->

		</div><!-- FIM DO INFO-PERFIL-WRAPPER -->

		<div class="info-perfil-disponibilidade-wrapper">
			<h4>Disponibilidade:</h4>
			<br>
			<div class="info-perfil-disponibilidade-card">
				<table>
					<tr>
						<th></th>
						<th>SE</th>
						<th>TE</th>
						<th>QU</th>
						<th>QU</th>
						<th>SE</th>
						<th>SÁ</th>
						<th>DO</th>
					</tr>

					<tr>
						<td>Manhã</td>
						<td><div class="check-info-perfil-disponibilidade"></div></td>
						<td><div class="check-info-perfil-disponibilidade"></div></td>
						<td><div class="check-info-perfil-disponibilidade"></div></td>
						<td><div class="check-info-perfil-disponibilidade"></div></td>
						<td><div class="check-info-perfil-disponibilidade"></div></td>
						<td><div class="check-info-perfil-disponibilidade"></div></td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
					</tr>

					<tr>
						<td>Tarde</td>
						<td><div class="check-info-perfil-disponibilidade"></div></td>
						<td><div class="check-info-perfil-disponibilidade"></div></td>
						<td><div class="check-info-perfil-disponibilidade"></div></td>
						<td><div class="check-info-perfil-disponibilidade"></div></td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
					</tr>

					<tr>
						<td>Noite</td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
						<td><div class="uncheck-info-perfil-disponibilidade"></div></td>
					</tr>
				</table>
			</div>
		</div>

		<a href="viewEditarInfoFamilia.php">Editar informações</a>
	<?php }?>
</section><!-- FIM PERFIL PRIVADO -->

<script type="text/javascript">
	$( "#botao-trocar-foto" ).click(function() {
	  	$('#botao-submit-foto').css('display', 'flex');
	});
</script>

<?php 
	include_once("viewFooter.php");	
?>