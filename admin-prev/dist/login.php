
<?php
// Conexão
require_once '../../Servidor/util/connection-prev-db.php';

// Sessão
session_start();

// Botão enviar
if(isset($_POST['btn_logCoach'])):
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

        $query = "SELECT email FROM coach WHERE email = '$login'";
        $resultado = mysqli_query($con, $query);        

        if(mysqli_num_rows($resultado) > 0):
        $senha = md5($senha);       
        $query = "SELECT * FROM coach WHERE email = '$login' AND senha = '$senha'";



        $result = mysqli_query($con, $query);

            if(mysqli_num_rows($result) == 1):
                $dados = mysqli_fetch_array($result);
                mysqli_close($con);
                $_SESSION['logado'] = true;
                $_SESSION['idCoach'] = $dados['id'];
                header('Location: index.php');
            else:
                $erros[] = "<p class='bg-danger text-white my-1'> Usuário e senha não conferem </p>";
            endif;

        else:
            $erros[] = "<p class='bg-danger text-white my-1'> Usuário inexistente.";
        endif;

    endif;

endif;
?>
<html lang="PT-BR">


    <?php include('menu/head.php');?>

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login Coach</h3></div>
                                    <?php 
                                        if(!empty($erros)):
                                            foreach($erros as $erro):
                                                echo $erro;
                                            endforeach;
                                        endif;
                                    ?>
                                    <div class="card-body">
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" type="text" name="email"placeholder="Entre com e-mail" id="email" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>" >
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Senha</label>
                                                <input class="form-control py-4" id="senha" name="senha" type="password" placeholder="Digite a senha" value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '' ?>" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Lembrar-me da Senha</label></div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="password.php">Esqueceu a senha?</a>
                                                <button type="submit" name="btn_logCoach" class="btn btn-primary text-white" id="btn_logCoach">Login</button></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><!--<a href="register.php">Need an account? Sign up!</a>--></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
