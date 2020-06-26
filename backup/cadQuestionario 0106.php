<!DOCTYPE html>
<html lang="PT-BR">
    <?php include('menu/head.php');?>

    <body class="sb-nav-fixed">
       <?php include('menu/nav.php');?>

        <div id="layoutSidenav">
            <?php include('menu/sidenav.php');?>
                  
            <!--começo do cadastro das questões-->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid mt-5">
                        <h2>Cadastro de Questionário</h2>
                        <form class="needs-validation" id="FormQuest" method="POST">
                        <input type="hidden" name="cadastrar" value=""> <div class="form-row">
                            <div class="col-md-8 mb-4">
                                <label for="validationCustom01">Entre com o título do questionário</label>
                                <input type="text" name="tituloQuest" class="form-control" id="validationCustom01" placeholder="Título do questionário" value="" required>
                                <div class="valid-feedback">ok!</div>
                                <div class="invalid-feedback">digite.</div>
                            </div>
                        </div>    
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Quantidade de perguntas</label>
                                <input type="number" min="0" class="form-control" id="validationCustom02" placeholder="Digite o número de Perguntas" name="numPerg" value="" required>
                                <div class="valid-feedback">ok!</div>
                            </div>
                        </div>
                        
                        <div class="form-row">    
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom03">Quantidade de perguntas</label>
                                <input type="number" min="0" class="form-control" id="validationCustom03" placeholder="Quantidade de respostas para cada pergunta" name="numResp" value="" required>
                                <div class="valid-feedback">ok!</div>
                            </div>                            
                        </div>

                        <button class="confirmaQuestionario btn btn-primary mt-3" id="btnQuest" type="submit">Cadastrar</button>
                       
                        </form>
                    </div>
                </main> 
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; feito por Marketink Fuel and Clubie
                            <script type="text/javascript">
                                document.write(new Date().getFullYear())
                            </script>
                            </div>                            
                            <a href="https://www.clubie.com.br/Clubie" target="_blank">Allan Daniel<br> e colaboração de Felipe Nascimento.</a> 
                        </div>
                    </div>
                </footer>   
            </div>
        </div>
    </div>    
    <script type="text/javascript">
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>    
                                              
        
    <script src="js/jquery.blockUI.js"></script>
    <script src="http://malsup.github.io/jquery.blockUI.js"></script>
    <script src="js/cadQuestionario.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
