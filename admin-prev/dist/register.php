<?php
session_start();
?>

<!DOCTYPE html>
<html lang="PT-BR">
    <?php include('menu/head.php');?>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
               <!-- <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>-->
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Criar Conta</h3></div>
                                    <div class="card-body">
                                        <div id="msg_cadCli"></div>
                                        <form id="formCli" method="post">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1">Nome</label><input class="form-control py-4" id="nome" type="text" placeholder="Entre somente com o primeiro nome" required="" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1">SobreNome</label><input class="form-control py-4" id="sobrenome" type="text" placeholder="Digite o sobrenome" required="" /></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="small mb-1">Email</label><input class="form-control py-4" id="email" type="email" aria-describedby="emailHelp" placeholder="Digite o E-mail" required=""/></div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1">Senha</label><input class="form-control py-4" id="senha" type="password" placeholder="Digite a senha" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1">Confirme a senha</label><input class="form-control py-4" id="confirmasenha" type="password" placeholder="Confirme a Senha"/></div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                                <a class="btn btn-primary btn-block text-white" id="btn_cadCli">Criar Conta</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Já tem conta? Siga para o login</a></div>
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
                            <div class="text-muted">Copyright &copy; feito por Marketink Fuel and 
                                <a href="http://www.clubie.com.br/Clubie/">Clubie</a> 
                            <script type="text/javascript">
                                document.write(new Date().getFullYear())
                            </script>
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
