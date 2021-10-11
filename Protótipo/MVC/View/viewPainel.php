<?php 
	session_start();

	//include_once("../Model/modelBancoDeDados.php");

	echo "Usuário logado: " .$_SESSION['nome'];
	
?>