<?php 
	$contErro = 0;
	for($i=0;$i<count($totalUsuarios);$i++){
		if(isset($_POST['login']) and isset($_POST['senha'])){
			if($totalUsuarios[$i]['login_usuario'] == $_POST['login'] and $totalUsuarios[$i]['senha_usuario'] == $_POST['senha']){
				
				$usuarioLogado = $_POST['login'];
				$nomeUsuario = $totalUsuarios[$i]['nome_usuario'];
				
				
				$_SESSION['login'] = $usuarioLogado;
				$_SESSION['nome'] = $nomeUsuario;
				
				echo "<script>document.location='painel-controle/perfil.php'</script>";		
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