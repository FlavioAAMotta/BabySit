<?php 
	session_start();
	include_once("modelBancoDeDados.php");

	$idUsuario = $_SESSION['id'];

	if(isset($_POST['agitados'])){
		$agitados = $_POST['agitados'];
	}else{
		$agitados = null;
	}

	if(isset($_POST['tranquilos'])){
		$tranquilos = $_POST['tranquilos'];
	}else{
		$tranquilos = null;
	}

	if(isset($_POST['brincar'])){
		$brincar = $_POST['brincar'];
	}else{
		$brincar = null;
	}

	if(isset($_POST['desenhos'])){
		$desenhos = $_POST['desenhos'];
	}else{
		$desenhos = null;
	}

	if(isset($_POST['filhos-familia'])){
		$filhosFamilia = $_POST['filhos-familia'];
	}else{
		$filhosFamilia = ' ';
	}

	if(isset($_POST['horario-familia'])){
		$horarioFamilia = $_POST['horario-familia'];
	}else{
		$horarioFamilia = ' ';
	}

	if(isset($_POST['desc-familia'])){
		$descFamilia = $_POST['desc-familia'];
	}else{
		$descFamilia = ' ';
	}

	if(isset($_POST['cuidados-familia'])){
		$cuidadosFamilia = $_POST['cuidados-familia'];
	}else{
		$cuidadosFamilia = ' ';
	}

	if(isset($_POST['servico-ativo'])){
		$servicoAtivo = $_POST['servico-ativo'];
	}else{
		$servicoAtivo = ' ';
	}


	$editarPerfilFamilia = $pdo->prepare("UPDATE perfil_familia SET pers_agitado_familia = '$agitados', pers_tranquilo_familia = '$tranquilos', pers_brincar_familia = '$brincar', pers_desenhos_familia = '$desenhos', filhos_familia = '$filhosFamilia', horario_familia = '$horarioFamilia', descricao_familia = '$descFamilia', cuidados_familia = '$cuidadosFamilia', servico_ativo_familia = '$servicoAtivo'
	 WHERE id_usuario = '$idUsuario'");

	$editarPerfilFamilia->execute();

	//header('Location: ../View/viewPaginaProjeto.php?id='.$idProjeto);
	echo "<script>document.location='../View/viewPerfilPrivado.php?tipoPerfil=familia'</script>";
?>