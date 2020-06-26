<?php 

	require_once('../util/connection-prev-db.php');

	function insertCoach(){

		global $con;
		$nome 			= $_POST['nome'];
		$sobrenome 		= $_POST['sobrenome'];
		$nomeFantasia	= $_POST['nomeFantasia'];
		$cpf			= $_POST['cpf'];
		$rg				= $_POST['rg'];
		$dataNascimento = $_POST['dataNascimento'];
		$genero			= $_POST['genero'];
		$telefone		= $_POST['telefone'];
		$celular		= $_POST['celular'];
		$email			= $_POST['email'];
		$escolaridade	= $_POST['escolaridade'];
		$endereco	 	= $_POST['endereco'];
		$numero			= $_POST['numero'];
		$complemento	= $_POST['complemento'];
		$bairro			= $_POST['bairro'];
		$cep  			= $_POST['cep'];
		$cidade		    = $_POST['cidade'];
		$uf			    = $_POST['uf'];
		$tipoEnd	    = $_POST['tipoEnd'];
		$coach_img	    = $_POST['coach_img'];
		$senha		    = md5($_POST['senha']);
		$confirmasenha  = md5($_POST['confirmasenha']);

		if ($senha != $confirmasenha) {
			echo '<p class="bg-danger">Senhas diferentes!!</p>';
			
		}else{
			$query = "insert into coach(nome,sobrenome,nomeFantasia,cpf,rg,dataNascimento,genero,telefone,celular,email,escolaridade,endereco,numero,complemento,bairro,cep,cidade,uf,tipoEnd,coach_img,senha,confirmasenha) values('$nome','$sobrenome','$nomeFantasia','$cpf','$rg','$dataNascimento','$genero','$telefone','$celular','$email','$escolaridade','$endereco','$numero','$complemento','$bairro','$cep','$cidade','$uf','$tipoEnd','$coach_img','$senha','$confirmasenha')";
			$result = mysqli_query($con,$query);

			if ($result) {
				echo '<p class="bg-success">Cadastro salvo com sucesso!!</p>';
			}else{
				echo '<p class="bg-danger">Problemas ao inserir o cadastro!!</p>';
			}

		}
		
	}


function loginCoach(){


session_start();

// Botão enviar
if(isset($_POST['btn-entrar'])):
	global $con;
	$erros = array();
	$login = mysqli_escape_string($con, $_POST['email']);
	$senha = mysqli_escape_string($con, $_POST['senha']);

	if(isset($_POST['lembrar-senha'])):
		setcookie('email', $login, time()+3600);
		setcookie('senha', md5($senha), time()+3600);
	endif;

	if(empty($login) or empty($senha)):
		$erros[] = "<p class='bg-danger my-1 text-white'> O campo login/senha precisa ser preenchido </p>";
	else:
		// 105 OR 1=1 
	    // 1; DROP TABLE teste

		$query = "SELECT email FROM usuario WHERE email = '$login'";
		$resultado = mysqli_query($con, $query);		

		if(mysqli_num_rows($resultado) > 0):
		$senha = md5($senha);       
		$query = "SELECT * FROM coach WHERE email = '$login' AND senha = '$senha'";



		$result = mysqli_query($con, $query);

			if(mysqli_num_rows($result) == 1):
				$dados = mysqli_fetch_array($result);
				mysqli_close($con);
				$_SESSION['logado'] = true;
				$_SESSION['idUsuario'] = $dados['id'];
				header('Location: ../../admin-prev/dist/index.php');
			else:
				$erros[] = "<p class='bg-danger text-white my-1'> Usuário e senha não conferem </p>";
			endif;

		else:
			$erros[] = "<p class='bg-danger text-white my-1'> Usuário inexistente. Clique<a> aqui</a> para cadastrar </p>";
		endif;

	endif;

endif;
}
/*
	function selectQuest(){

		global $con;
		$value="";
		$value='<table class="table table-bordered mt-3">
					<tr>
						<td><strong>Quest. ID</strong></td>
						<td><strong>Nome Questionário</strong></td>
						<td><strong>Tipo Questionário</strong></td>
						<td><strong>Cadastrar</strong></td>
						<td><strong>Editar</strong></td>
						<td><strong>Deletar</strong></td>
					</tr>
				';
		$query = "select * from quest";	
		$result = mysqli_query($con,$query);

		while($row=mysqli_fetch_assoc($result)){
			$value.='<tr>
						<td>'.$row['idQuestionario'].'</td>
						<td>'.$row['tituloQuest'].'</td>
						<td>'.$row['tipoQuest'].'</td>
						<td><button class="btn btn-success" id="btn_cadPerg"><a href="http://localhost/prev0705/admin-prev/dist/cadPerguntas.php" style="color:white; text-decoration:none"><i class="far fa-plus-square"></i></a></button></td>
						<td><button class="btn btn-info" id="btn_editQuest"><i class="far fa-edit"></i></button></td>
						<td><button class="btn btn-danger" id="btn_delQuest"><i class="far fa-trash-alt"></i</button></td>
					</tr>';
		}
		$value.='</table>';
		echo json_encode(['status'=>'success','html'=>$value]);	
	}
*/
?>
