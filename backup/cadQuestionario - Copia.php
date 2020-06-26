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
                            <div class="form-row">
                            	<h2>Cadastro de Questionário</h2>
                            	<div class="row">
                            		<div class="col">
                            			<!-- Button trigger modal -->
                            			<button type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#cadastrarQuest">Cadastrar
										</button>
                            		</div>
                            	</div>
                            	<div class="card-body">
                            		<div class="" id="table"></div>
                            	</div>
                        	</div>                        
                        </div>

                        <!--Mensagem de Modal de Sucesso!-->
                        <div class="modal fade" id="modalOk" tabindex="-1" role="dialog">
        					<div class="modal-dialog" role="document">
	          					<div class="modal-content">
	            					<div class="modal-body">
	            						<h4 class="text-success">Operação realizada com Sucesso</h4>
	            					</div>
	            					<div class="modal-footer">
	            						<button type="button" class="btn btn-success" id="btnModal" data-dismiss="modal">Ok</button>
	            					</div>
	            				</div><!-- /.modal-content -->
        					</div><!-- /.modal-dialog -->
        				</div> 
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
                            <a href="https://www.clubie.com.br/Clubie" target="_blank">Allan Daniel.</a> 
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
