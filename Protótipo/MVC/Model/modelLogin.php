<?php 
	$verificaUsuario = $pdo->prepare("SELECT * FROM usuarios_teste");
	$verificaUsuario->execute();
	$totalUsuarios = $verificaUsuario->fetchAlL(); 
?>