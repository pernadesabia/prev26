<?php
// Conexão
require_once 'Servidor/util/connection-prev-db.php';

// Sessão
session_start();

// Botão enviar
if(isset($_POST['btn-entrar'])):
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
		$query = "SELECT * FROM usuario WHERE email = '$login' AND senha = '$senha'";



		$result = mysqli_query($con, $query);

			if(mysqli_num_rows($result) == 1):
				$dados = mysqli_fetch_array($result);
				mysqli_close($con);
				$_SESSION['logado'] = true;
				$_SESSION['idUsuario'] = $dados['id'];
				header('Location: Cliente/painel.php');
			else:
				$erros[] = "<p class='bg-danger text-white my-1'> Usuário e senha não conferem </p>";
			endif;

		else:
			$erros[] = "<p class='bg-danger text-white my-1'> Usuário inexistente. Clique<a> aqui</a> para cadastrar </p>";
		endif;

	endif;

endif;
?>

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
</head>
<body>

	<section class="hero is-success is-fullheight bg-info">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="box column is-4 is-offset-4 bg-secondary">
                    <h3 class="title">Sistema de Login</h3>
                    <?php 
						if(!empty($erros)):
							foreach($erros as $erro):
								echo $erro;
							endforeach;
						endif;
					?>
                    
                    <div class="box">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST">
                            <div class="field">
                                <div class="control">
                                    <input type="text" class="input is-large" name="email" placeholder="Seu Email" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>">                                
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input type="password" class="input is-large" placeholder="Sua Senha" name="senha" value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '' ?>"><br>
                                </div>
                            </div>
                            Lembrar-me: <input type="checkbox" name="lembrar-senha">

                            <div class="field">
                                <a href="admin-prev/dist/register.php">Cadastrar</a>
                            </div>
                            <button type="submit" name="btn-entrar" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>
</html>