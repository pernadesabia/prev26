<?php
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
  header('Location: ../index.php');
endif;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="Allan Daniel Oliveira dos Santos">
  	<!--<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->
  	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  	<link href="../admin-prev/dist/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  	<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="quiz-disc.js"></script>
	<title>Quiz DISC</title>
</head>
<body class="bg-light">
	<div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
          <main>
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-10">
                          <div class="card shadow-lg border-0 rounded-lg mt-5">
                              <div class="card-header">
                                  <div class="" id="tableDisc"></div>
                              </div>
                         	<div class="" id="tableDiscResp"></div>
                      </div>
                  </div>
              </div>
          </main>                
      </div>
  </div>


</body>
</html>