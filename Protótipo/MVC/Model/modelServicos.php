<?php 
	$buscarFamilia = $pdo->prepare('SELECT * FROM perfil_familia');
	$buscarFamilia->execute();
	$totalFamilia = $buscarFamilia->fetchAll();
?>