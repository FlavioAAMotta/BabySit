<?php 
	$buscarUsuarios = $pdo->prepare('SELECT * FROM usuarios_teste');
	$buscarUsuarios->execute();
	$totalUsuarios = $buscarUsuarios->fetchAll();

?>