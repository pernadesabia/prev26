<?php 

	require_once('../util/connection-prev-db.php');

	function insertPerg(){

		global $con;
		$tituloPerg = $_POST['tituloPerg'];
		
		//$tipoQuest   = $_POST['tipoQuest'];

		$query = "insert into perg(tituloPerg) values('$tituloPerg')";
		$result = mysqli_query($con,$query);

		if ($result) {
			echo '<p class="bg-success">Cadastro salvo com sucesso!!</p>';
		}else{
			echo 'Problemas ao inserir o cadastro';
		}
	}

	//seleciona os dados do questionário no campo de perguntas	

	function selectDadosQuest(){

		global $con;
		$value="";
		$value='
				<table class="table table-bordered mt-3">
					<tr class="bg-dark text-white">
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
						<td><a href="http://localhost/prev0705/admin-prev/dist/cadPerguntas.php">'.$row['idQuestionario'].'</a></td>
						<td>'.$row['tituloQuest'].'</td>
						<td>'.$row['tipoQuest'].'</td>
						<td><button class="btn btn-success" class="idQ" id="btn_cadPerg" data-id1='.$row['idQuestionario'].'><a href="http://localhost/prev0705/admin-prev/dist/cadPerguntas.php" style="color:white; text-decoration:none"><i class="far fa-plus-square"></i></a></button></td>
						<td><button class="btn btn-warning text-white" id="btn_editQuest" data-id='.$row['idQuestionario'].'><i class="far fa-edit"></i></button></td>
						<td><button class="btn btn-danger" id="btn_delQuest" data-id2='.$row['idQuestionario'].'><i class="far fa-trash-alt"></i</button></td>
					</tr>';
		}
		$value.='</table>';
		echo json_encode(['status'=>'success','html'=>$value]);	
	}

	
	

	//atualizar questionario
	

	//função para deletar cadastro de questionario
	

?>
