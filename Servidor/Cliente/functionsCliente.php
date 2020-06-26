<?php 

	require_once('../util/connection-prev-db.php');

	function insertCliente(){

		global $con;
		$nome_cli 			= $_POST['nome'];
		$sobrenome_cli 		= $_POST['sobrenome'];
		$email_cli			= $_POST['email'];
		$senha_cli		    = md5($_POST['senha']);
		$confirmasenha_cli  = md5($_POST['confirmasenha']);

	if ($senha != $confirmasenha) {
			echo '<p class="bg-danger">Senhas diferentes!!</p>';
			
		}else{
			$query = "insert into usuario(nome,sobrenome,email,senha,confirmasenha,dataCadastro) values('$nome_cli','$sobrenome_cli','$email_cli','$senha_cli','$confirmasenha_cli', NOW())";
			$result = mysqli_query($con,$query);


			if ($result) {
				echo '<p class="bg-success">Cadastro salvo com sucesso!!</p>';
				
			}else{
				echo '<p class="bg-danger">Problemas ao inserir o cadastro!!</p>';
			}

		}

		
	}

	



?>
