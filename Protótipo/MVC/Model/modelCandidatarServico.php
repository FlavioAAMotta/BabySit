<?php 
	session_start();

	include_once("modelBancoDeDados.php");

	$nomeFamiliaServico = $_SESSION['nomeFamiliaServico'];
	$idFamiliaServico = $_SESSION['idFamiliaServico'];

	$idBabaServico = $_SESSION['id-usuario-logado'];
	$nomeBabaServico = $_SESSION['nome'];

	$candidataServico = $pdo->prepare("INSERT INTO servico (id_usuario_familia, nome_usuario_familia, id_usuario_baba, nome_usuario_baba) VALUES ('$idFamiliaServico', '$nomeFamiliaServico', '$idBabaServico', '$nomeBabaServico')"); 

	$candidataServico->execute();

	echo "<script>document.location='../View/viewPerfilPublicoPais.php?idServico=$idFamiliaServico'</script>";

?>