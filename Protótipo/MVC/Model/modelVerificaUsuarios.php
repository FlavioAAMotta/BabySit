<?php 
	$buscarUsuarios = $pdo->prepare("SELECT * FROM usuarios_teste WHERE id_usuario = $idUsuario");
	$buscarUsuarios->execute();
	$totalUsuarios = $buscarUsuarios->fetchAll();
?>