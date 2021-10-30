<?php 
	$dataRecebida = explode("-", $totalUsuarios[0]['data_registro_usuario']);

	$dataDia = $dataRecebida[2];
	$dataFormatada = $dataRecebida[2]."/".$dataRecebida[1]."/".$dataRecebida[0];
?>