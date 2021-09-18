<?php 
	include_once("viewHead.php");
	include_once("../Model/modelBancoDeDados.php");	
?>

<section class="">
	
	<?php 
		if($_GET['perfil'] == 'baba'){
			echo "Perfil escolhido: baba";
		}
		else{
			echo "Perfil escolhido: família";	
		}
	?>

</section>

<?php 
	include_once("viewFooter.php");	
?>