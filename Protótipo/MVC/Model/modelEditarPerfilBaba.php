<?php 
	include_once("modelBancoDeDados.php");

	$idUsuario = $_SESSION['id'];

	$expBebe = $_POST['bebe'];
	$expCrianca = $_POST['crianca'];
	$expJovem = $_POST['jovem'];
	$linguas = $_POST['linguas'];
	$tarefaSimples = $_POST['tarefa_simples'];
	$fazerCompras = $_POST['fazer-compras'];
	$cozinhar = $_POST['cozinhar'];
	$licaoCasa = $_POST['licao-casa'];
	$formacao = $_POST['formacao'];
	$descricao = $_POST['descricao'];
	$valorHora = $_POST['valor-hora'];

	$editarPerfilBaba = $pdo->prepare("UPDATE perfil_baba SET exp_bebe_baba = '$expBebe', exp_crianca_baba = '$expCrianca', exp_jovem_baba = '$expJovem', linguas_baba = '$linguas', ajuda_tarefa_baba = '$tarefaSimples', ajuda_compras_baba = '$fazerCompras', ajuda_cozinhar_baba = '$cozinhar', ajuda_licao_baba = '$licaoCasa', formacao_baba = '$formacao', descricao_baba = '$descricao', valor_hora_baba = '$valorHora'
	 WHERE id_usuario = '$idUsuario'");

	$editarPerfilBaba->execute();

	//header('Location: ../View/viewPaginaProjeto.php?id='.$idProjeto);
	echo "<script>document.location='../viewPerfilPrivado.php?tipoPerfil=baba'</script>";
?>