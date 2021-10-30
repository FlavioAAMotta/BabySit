<?php 
	session_start();
	include_once("modelBancoDeDados.php");

	$idUsuario = $_SESSION['id'];

	if(isset($_POST['exp-meses'])){
		$expMeses = $_POST['exp-meses'];
	}else{
		$expMeses = null;
	}

	if(isset($_POST['exp-anos'])){
		$expAnos = $_POST['exp-anos'];
	}else{
		$expAnos = null;
	}

	if(isset($_POST['bebe'])){
		$expBebe = $_POST['bebe'];
	}else{
		$expBebe = null;
	}

	if(isset($_POST['crianca'])){
		$expCrianca = $_POST['crianca'];
	}else{
		$expCrianca = null;
	}

	if(isset($_POST['jovem'])){
		$expJovem = $_POST['jovem'];
	}else{
		$expJovem = null;
	}

	if(isset($_POST['linguas'])){
		$linguas = $_POST['linguas'];
	}else{
		$linguas = ' ';
	}

	if(isset($_POST['tarefa-simples'])){
		$tarefaSimples = $_POST['tarefa-simples'];
	}else{
		$tarefaSimples = null;
	}

	if(isset($_POST['fazer-compras'])){
		$fazerCompras = $_POST['fazer-compras'];
	}else{
		$fazerCompras = null;
	}

	if(isset($_POST['cozinhar'])){
		$cozinhar = $_POST['cozinhar'];
	}else{
		$cozinhar = null;
	}

	if(isset($_POST['licao-casa'])){
		$licaoCasa = $_POST['licao-casa'];
	}else{
		$licaoCasa = null;
	}

	if(isset($_POST['formacao'])){
		$formacao = $_POST['formacao'];
	}else{
		$formacao = ' ';
	}

	if(isset($_POST['descricao'])){
		$descricao = $_POST['descricao'];
	}else{
		$descricao = ' ';
	}

	if(isset($_POST['valor-hora'])){
		$valorHora = $_POST['valor-hora'];
	}else{
		$valorHora = 0;
	}

	$editarPerfilBaba = $pdo->prepare("UPDATE perfil_baba SET exp_bebe_baba = '$expBebe', exp_crianca_baba = '$expCrianca', exp_jovem_baba = '$expJovem', exp_meses_baba = $expMeses, exp_anos_baba = $expAnos,linguas_baba = '$linguas', ajuda_tarefa_baba = '$tarefaSimples', ajuda_compras_baba = '$fazerCompras', ajuda_cozinhar_baba = '$cozinhar', ajuda_licao_baba = '$licaoCasa', formacao_baba = '$formacao', descricao_baba = '$descricao', valor_hora_baba = '$valorHora'
	 WHERE id_usuario = '$idUsuario'");

	$editarPerfilBaba->execute();

	//header('Location: ../View/viewPaginaProjeto.php?id='.$idProjeto);
	echo "<script>document.location='../View/viewPerfilPrivado.php?tipoPerfil=baba'</script>";
?>