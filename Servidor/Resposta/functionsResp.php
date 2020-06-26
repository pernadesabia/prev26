<?php 

	require_once('../util/connection-prev-db.php');

	function insertResp(){

		global $con;
		$tituloPerg = $_POST['tituloResp'];
		$valor	    = $_POST['valorResp'];
		
		//$tipoQuest   = $_POST['tipoQuest'];

		$query = "insert into resp(tituloResp,valor) values('$tituloResp','$valor')";
		$result = mysqli_query($con,$query);

		if ($result) {
			echo '<p class="bg-success">Cadastro salvo com sucesso!!</p>';
		}else{
			echo 'Problemas ao inserir o cadastro';
		}
	}


?>
