<?php 

	$con = mysqli_connect('localhost','root','','teste');
	if (!$con) {
		die('verifique sua conexão com o banco de dados!'.mysqli_error());
	}

?>