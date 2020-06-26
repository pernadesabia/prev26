<?php 

	require_once('../util/connection-prev-db.php');

	function insertQuest(){

		global $con;
		$tituloQuest = $_POST['tituloQuest'];
		$tipoQuest   = $_POST['tipoQuest'];

		$query = "insert into quest(tituloQuest,tipoQuest) values('$tituloQuest','$tipoQuest')";
		$result = mysqli_query($con,$query);

		if ($result) {
			echo '<p class="bg-success">Cadastro salvo com sucesso!!</p>';
		}else{
			echo 'Problemas ao inserir o cadastro';
		}
	}

	//seleciona os dados do questionário
	
	function selectQuest(){

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

	
	function editQuest(){
		global $con;
		$idQ = $_POST['idQ'];
		$query = "select * from quest where idQuestionario ='$idQ'";
		$result = mysqli_query($con,$query);

		$userData = new stdClass();

		while($row=mysqli_fetch_assoc($result)){
			$userData->idQuestionario = $row['idQuestionario'];
			$userData->tituloQuest    = $row['tituloQuest'];
			$userData->tipoQuest      = $row['tipoQuest'];
		}
		echo json_encode($userData);


	}

	//atualizar questionario
	function updateQuest(){
		global $con;
		$edit_idQuest 	  = $_POST['e_id'];
		$edit_tituloQuest = $_POST['e_tituloQ'];
		$edit_tipoQuest   = $_POST['e_tipoQ'];

		$query = "update quest set tituloQuest='$edit_tituloQuest',tipoQuest='$edit_tipoQuest' 
		where idQuestionario='$edit_idQuest'";

		$result = mysqli_query($con,$query);
		if ($result) {
			echo '<p class="bg-success">Edição realizada com sucesso</p>';
			# code...
		}else{

			echo '<p class="">Erro ao editar os dados!!</p>';
		}
	}

	//função para deletar cadastro de questionario
	function deleteQuest(){
		global $con;
		$del_idQuest = $_POST['del_idQuest'];
		
		$query = "delete from quest where idQuestionario='$del_idQuest'";

		$result = mysqli_query($con,$query);
		if ($result) {
			echo '<p class="bg-success text-white">Apagado com sucesso</p>';
			# code...
		}else{

			echo '<p class="">Erro ao editar os dados!!</p>';
		}

	}


	function selectDiscQuest(){

		global $con;
		$value="";
		$value='
				<table class="table table-bordered mt-3">
					
				';
		$query = "select tituloQuest,tipoQuest from quest where idQuestionario = 37";	
		$result = mysqli_query($con,$query);

		while($row=mysqli_fetch_assoc($result)){
			$value.='<tr class="bg-info text-light text-center display-4">
						<td>'.$row['tituloQuest'].'</td>
					</tr>';
		}
		$value.='</table>';
		echo json_encode(['status'=>'success','html'=>$value]);	
	}


	function selectDiscPerg(){

		global $con;
		$value="";
		$value='
				<table class="table mt-3">
					
				';
		$query = "select * from perg";

		$result = mysqli_query($con,$query);

		while($row=mysqli_fetch_assoc($result)){
			$value.='<tr class="bg-white">
						<td><a href="#">'.$row['tituloPerg'].'</a></td>
						<td>'.$row['idPerg'].'</td>						
					</tr>';
		}
		$value.='</table>';
		echo json_encode(['status'=>'success','html'=>$value]);	
	}


?>
