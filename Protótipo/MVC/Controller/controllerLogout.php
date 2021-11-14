<?php
	include("../Model/modelBancoDeDados.php");
	
	session_start();
	$logout = $_SESSION['login'];
	$idUsuarioLogado = $_SESSION['id-usuario-logado'];
	
	$_SESSION['login'] = array();

	$atualizarStatus = $pdo->prepare("UPDATE usuarios_teste SET logado_usuario = '0' WHERE id_usuario = '$idUsuarioLogado'");

	$atualizarStatus->execute();
	
	//header("Location: ../../index.php");
	echo "<script>document.location='../View/viewLogin.php'</script>";
	exit();
?>