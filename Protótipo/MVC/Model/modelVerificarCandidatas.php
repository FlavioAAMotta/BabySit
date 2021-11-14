<?php 
	$candidatas = $pdo->prepare('SELECT * FROM servico');
	$candidatas->execute();
	$totalCandidatas = $candidatas->fetchAll();
?>