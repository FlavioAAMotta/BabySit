<?php 
	include_once("modelBancoDeDados.php");
	include_once("modelUsuarios.php");

	if(isset($_POST['nome-usuario'])){
		$nomeUsuario = $_POST['nome-usuario'];
		$sobrenomeUsuario = $_POST['sobrenome-usuario'];
		$cpfUsuario = $_POST['cpf-usuario'];
		$dataUsuario = $_POST['data-usuario'];
		$enderecoUsuario = $_POST['endereco-usuario'];
		$complementoUsuario = $_POST['complemento-usuario'];
		$cepUsuario = $_POST['cep-usuario'];
		$telefoneUsuario = $_POST['telefone-usuario'];
		$sexoUsuario = $_POST['sexo-usuario'];
		$emailUsuario = $_POST['email-usuario'];
		$senhaUsuario = $_POST['senha-usuario'];
		$dataRegistroUsuario = date('d-m-Y'); //testar pra ver se da certo!!!
		
		$addUsuario = $pdo->prepare("INSERT INTO usuarios_teste (nome_usuario, sobrenome_usuario, cpf_usuario, nasc_usuario, endereco_usuario, complemento_usuario, cep_usuario, telefone_usuario, sexo_usuario, email_usuario, senha_usuario, data_registro_usuario) VALUES ('$nomeUsuario', '$sobrenomeUsuario', '$cpfUsuario', '$dataUsuario', '$enderecoUsuario', '$complementoUsuario', '$cepUsuario', '$telefoneUsuario', '$sexoUsuario', '$emailUsuario', '$senhaUsuario', '$dataRegistroUsuario')");

		$addUsuario->execute();

		for($i=0; $i <= count($totalUsuarios); $i++) { 
			
		}

		$idUsuario = $i;

		$addPerfilBaba = $pdo->prepare("INSERT INTO perfil_baba (id_usuario) VALUES ('$idUsuario')"); 
		
		$addPerfilFamilia = $pdo->prepare("INSERT INTO perfil_familia (id_usuario)VALUES ('$idUsuario')"); 	

		
		$addPerfilBaba->execute();
		$addPerfilFamilia->execute();

		echo "<script>document.location='../View/viewLogin.php'</script>";
	}
?>