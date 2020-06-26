<?php
 
session_start();
if(!isset($_SESSION['logado'])):
  header('Location: login.php');
endif;

?>

<!DOCTYPE html>

<html lang="PT-BR">
    <head>        
        <?php include('menu/head.php');?>
    </head>
    

    <body class="sb-nav-fixed">
       <?php include('menu/nav.php');?>
        <div id="layoutSidenav">
            <?php include('menu/sidenav.php');?>                  
            <!--começo do cadastro das questões-->
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid mt-5">
                        
                        <div class="needs-validation">
                            <div class="form-row ml-1">
                            	<h2>Cadastro de Perguntas</h2>                           	

                                <div class="card-body">
                            		<div class="" id="tabl"></div>
                            	</div>
                        	</div>   

                            <div class="form-row mt-3">
                                <div class="col-8" >
                                    <input type="text" name="tituloPerg" id="tituloPerg" class="form-control" placeholder="Entre com a pergunta">
                                </div>
                            </div> 
                            <h5 class="ml-1 mt-4">Cadastro das Respostas</h5>
                            <div id="msg_cadPerg" class="bg-success text-white"></div>
                            <form id="formPerg">
                                <div class="form-row">
                                <div class="col-8">
                                    <input type="text" name="tituloResp[]" class="form-control mt-2" placeholder="digite a resposta">
                                </div>
                                <div class="col-2">
                                    <input type="text" name="valorResp[]" class="form-control mt-2" placeholder="valor da resposta">
                                </div>
                                <div>                                    
                                    <button type="button" class="btn btn-success mt-2" id="addCampo"> + </button>
                                </div>
                                </div>
                            </form> 
                            <div class="form-row">
                                <div class=" mt-3 ml-1">
                                    <button type="submit" name="cadResp" id="btn_cadResp" class="btn btn-info my-3">Salvar</button>
                                </div>
                            </div>  
                        </div>


                        
                    </div>
                </main> 
                <script type="text/javascript">
                    $(document).ready(function () 
                    {
                        var cont = 1;
                        $("#addCampo").click(function(){
                            cont++;
                        $('#formPerg').append('<div class="row" id="campo' + cont + '"><div class="col-8"><input type="text" name="tituloResp[]" class="form-control mt-2" placeholder="digite a resposta"></div><div class="col-2"><input type="text" name="valorResp[]" class="form-control mt-2" placeholder="valor da resposta" style="margin-left:-10px; width:172px;"></div><button type="button" id="' + cont + '" class="btn-apagar btn btn-danger mt-2"> - </button></div></div>');
                    });

                        $('form').on('click', '.btn-apagar', function () {
                            var button_id = $(this).attr("id");
                            $('#campo' + button_id + '').remove();
                        });

                })

                    
                </script>
                <footer class="py-4 bg-dark mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; feito por Marketink Fuel and Clubie
                            <script type="text/javascript">
                                document.write(new Date().getFullYear())
                            </script>
                            </div>                            
                            <a href="https://www.clubie.com.br/Clubie" target="_blank">Allan Daniel.</a> 
                        </div>
                    </div>
                </footer>   
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
