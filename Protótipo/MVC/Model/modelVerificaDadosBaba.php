<?php 
	$buscarDadosBaba = $pdo->prepare('SELECT * FROM perfil_baba WHERE id_usuario == "$idUsuario"');
	$buscarDadosBaba->execute();
	$totalDadosBaba = $buscarDadosBaba->fetchAll();
?>