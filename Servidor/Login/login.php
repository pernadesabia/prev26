<?php
// Conexão
require_once '../util/connection-prev-db.php';

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

    if(empty($email) or empty($senha)):
        $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
    else:
        // 105 OR 1=1 
        // 1; DROP TABLE teste

        $query = "SELECT email FROM usuario WHERE email = '$login'";
        $result = mysqli_query($con, $sql);      

        if(mysqli_num_rows($result) > 0):
        $senha = md5($senha);       
        $query = "SELECT * FROM usuario WHERE email = '$login' AND senha = '$senha'";



        $result = mysqli_query($con, $query);

            if(mysqli_num_rows($result) == 1):
                $dados = mysqli_fetch_array($result);
                mysqli_close($con);
                $_SESSION['logado'] = true;
                $_SESSION['idUsuario'] = $dados['id'];
                header('Location: ../../Cliente/painel.php');
            else:
                $erros[] = "<li> Usuário e senha não conferem </li>";
            endif;

        else:
            $erros[] = "<li> Usuário inexistente </li>";
        endif;

    endif;

endif;
?>

