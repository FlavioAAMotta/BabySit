<?php 
	
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=baby_sit','root','');
	}
	catch(Exception $e){
		echo 'Erro!';
	}

?>