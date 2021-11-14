<?php 
	
	/*if(isset($_POST['login'])){	
		$login = $_POST['login'];
		$senha = $_POST['senha'];

		if($login == 'flavio' && $senha == '123'){
			echo "<script>document.location='../View/viewSelecionarPerfil.php'</script>";
		}
		else{
			echo "DADOS INCORRETOS!";
		}		
	}*/

	$contErro = 0;
	for($i=0;$i<count($totalUsuarios);$i++){
		if(isset($_POST['login']) and isset($_POST['senha'])){
			if($totalUsuarios[$i]['email_usuario'] == $_POST['login'] and $totalUsuarios[$i]['senha_usuario'] == $_POST['senha']){
				
				$idUsuarioLogado = $totalUsuarios[$i]['id_usuario'];
				include_once("../Model/modelStatusUsuario.php");
				$_SESSION['id-usuario-logado'] = $idUsuarioLogado;

				$usuarioLogado = $_POST['login'];
				$nomeUsuario = $totalUsuarios[$i]['nome_usuario'];
				$idUsuario = $totalUsuarios[$i]['id_usuario'];	
				
				$_SESSION['login'] = $usuarioLogado;
				$_SESSION['nome'] = $nomeUsuario;
				$_SESSION['id'] = $idUsuario;
				
				echo "<script>document.location='../View/viewSelecionarPerfil.php'</script>";		
			}
			else{
				if($contErro == 0){
					$contErro += 1;
					echo "DADOS INCORRETOS!";
				}
			}
		}
	}
?>