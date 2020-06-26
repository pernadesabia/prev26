<?php
session_start();

// Verificação
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
        <!--include do menu horizontal no topo-->
       <?php include('menu/nav.php');?>

        <!--include do menu lateral-->
        <div id="layoutSidenav">
            <?php include('menu/sidenav.php');?> 

            <!--começo do cadastro das questões-->            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid mt-5">
                        
                        <div class="needs-validation">
                            <div class="">
                            	<h2 class="ml-3">Cadastro de Questionário</h2>
                            	<!--<div class="row">-->
                            		<div class="col">
                            			<!-- Button trigger modal -->
                            			<button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#cadastrarQuest">Cadastrar
										</button>
                            	<!--	</div>-->
                            	</div>
                            	<div class="card-body">
                                    <p class="text-white" id="delMessage"></p>

                            		<div class="" id="table"></div>
                            	</div>
                              
								

							<!-- Modal Cadastro Questionário -->
								<div class="modal fade" id="cadastrarQuest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  								<div class="modal-dialog" role="document">
	    								<div class="modal-content">
	      									<div class="modal-header">
	        									<h5 class="modal-title" id="exampleModalLabel">Cadastro de Questionário</h5>
	        									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          										<span aria-hidden="true">&times;</span>
	        									</button>
	      									</div>
	      									<div class="modal-body">
		      									<form id="formQuest">
		      										<div id="msg_cadQuest" class=" text-light"><strong></strong></div>
		      										<input type="text" class="form-control my-4" name="tituloQuest" id="tituloQuest" placeholder="Entre com o titulo do Questionário">
		      										<input type="text" class="form-control my-4" name="tipoQuest" id="tipoQuest" placeholder="Entre com o tipo de Questionário">
		      									</form>
	      									</div>
	      									
	      									<div class="modal-footer">
										        <button type="button" class="btn btn-success" id="btn_cadQuest">Salvar</button>
										        <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_fecharModal">Fechar</button>
	      									</div>
	    								</div>
	  								</div>
								</div>

                                <!-- Modal  para Edição Questionário -->
                                <div class="modal fade" id="editQuest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="edit_exampleModalLabel">Edição de Questionário</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="formQuest">
                                                    <div id="msg_editQuest" class="text-dark"></div>
                                                    <input type="hidden" class="form-control my-4" name="edit_idQuest" id="edit_idQuest">
                                                    <input type="text" class="form-control my-4" name="edit_tituloQuest" id="edit_tituloQuest" placeholder="Entre com o titulo do Questionário">
                                                    <input type="text" class="form-control my-4" name="edit_tipoQuest" id="edit_tipoQuest" placeholder="Entre com o tipo de Questionário">
                                                </form>
                                            </div>
                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" id="btn_updQuest">Editar</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_fecharModal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Delete Questionario-->
                                <div class="modal fade" id="del_quest_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="edit_exampleModalLabel">Apagar Questionario</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-white" id="delMessage"></p> 
                                                <p>Deseja apagar o questionário?</p>
                                                <button type="button" class="btn btn-success" id="btn_delQuestConfirma">Apagar</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_fecharModal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
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
