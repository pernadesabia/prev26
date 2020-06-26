<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="estilo/node_modules/bootstrap/compiler/bootstrap.css">
	<!--novo link da folha de estilo-->
	<link rel="stylesheet" href="estilo/style/css/style.css">
	<link rel="stylesheet" href="admin-prev/dist/css/bulma.min.css">
	<title>Previsivel</title>
	<style type="text/css">
		html,body {
			font-family: 'Open Sans', serif;
			font-size: 14px;
			font-weight: 300;
		}
		.hero.is-success {
		    background: #f2f7fa;
		}
		.hero .nav, .hero.is-success .nav {
		    -webkit-box-shadow: none;
		    box-shadow: none;
		}
		input {
		    font-weight: 300;
		}
		p {
		    font-weight: 700;
		}
	</style>
</head>
<body>
	<section class="hero is-success is-fullheight bg-info">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="box column is-4 is-offset-4 bg-secondary">
                    <h3 class="title">Sistema de Login</h3>
                    
                    
                    <div class="box">
                        <form action="Servidor/Login/login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="email" id="email" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" id="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>

                            <div class="field">
                                <a href="admin-prev/dist/register.php">Cadastrar</a>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
	<div class="container">
		<div class="row mt-5">
			<button class="btn btn-info ml-5"><a href="quiz-disc.php" class="teste" style="text-decoration: none; color: white">Teste</a></button>
			<button class="btn btn-warning ml-5"><a href="admin-prev/dist/register.php" class="teste" style="text-decoration: none; color: white">Cadastrar</a></button>
			<button class="btn btn-success ml-5"><a href="admin-prev/dist/login.php" class="teste" style="text-decoration: none; color: white">Login</a></button>

		</div>
	</div>-->

	
	
	<script src="estilo/node_modules/jquery/dist/jquery.js"></script>
    <script src="estilo/node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="estilo/node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>

