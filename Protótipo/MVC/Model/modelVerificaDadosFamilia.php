<?php 
	$buscarDadosFamilia = $pdo->prepare("SELECT * FROM perfil_familia WHERE id_usuario = '$idUsuario'");
	$buscarDadosFamilia->execute();
	$totalDadosFamilia = $buscarDadosFamilia->fetchAll();
?>