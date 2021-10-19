<?php 
	include_once("viewHead.php");
	//include_once("../Model/modelBancoDeDados.php");	
?>

<section class="perfil-privado container-principal">
	
	<h2>Suas informações:</h2>
	<br>

	<?php if($_GET['tipoPerfil'] == 'baba'){?>
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
				<div class="exp-info-card">
					<p>Experiência:</p>
					<div class="icon-exp-wrapper">
						<div class="icon-exp-box">
							<i class="fas fa-baby-carriage"></i>
							<p>Bebê</p>
						</div>

						<div class="icon-exp-box">
							<i class="fas fa-child"></i>
							<p>Criança</p>
						</div>

						<div class="icon-exp-box">
							<i class="fas fa-male"></i>
							<p>Jovem</p>
						</div>
					</div>
				</div>

				<p>Tempo:</p>
				<p>Mês/Ano</p>

				<p>Linguas:</p>
				<p>Língua 1 / Língua 2 / Língua 3</p>
				<br>
				<div class="info-tarefas-perfil-box">
					<h4>Pode ajudar com:</h4>
					<br>
					<input type="checkbox" checked onclick="return false;"/>
					<label>Tarefas simples</label>
					<br>
					<input type="checkbox" onclick="return false;"/>
					<label>Fazer compras</label>
					<br>
					<input type="checkbox" checked onclick="return false;"/>
					<label>Cozinhar</label>
					<br>
					<input type="checkbox" checked onclick="return false;"/>
					<label>Lição de casa</label>
				</div>
			</div><!-- FIM DO EXTRA-INFO-PERFIL-BOX -->

			<div class="extra-info-perfil-box">
				<div class="exp-info-formacao">
					<p>Formação</p>
					<textarea class="descricao-perfil-privado">Lorem ipsum dolor sit amet</textarea>
					<br>
					<p>Descrição:</p>
					<textarea class="descricao-perfil-privado">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum, justo vitae congue finibus, justo urna placerat ipsum.</textarea>
					<br>
					<p>Valor/Hora</p>
					<p>R$15,00</p>
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

		<button>Editar informações</button>
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

		<button>Editar informações</button>
	<?php }?>
</section><!-- FIM PERFIL PRIVADO -->

<?php 
	include_once("viewFooter.php");	
?>