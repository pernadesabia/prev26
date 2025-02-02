<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Previsivel - MF Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Previsível</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="layout-static.html">Static Navigation</a><a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Páginas
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                        >Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login.html">Login</a><a class="nav-link" href="register.html">Register</a><a class="nav-link" href="password.html">Forgot Password</a></nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                                        >Questionários
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="cadQuestionario.php">Cadastro</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts</a
                            ><a class="nav-link" href="tables.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables</a
                            >
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
           
            <!--começo do cadastro das questões-->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid mt-5">
                        <h2>Cadastro de Questionário</h2>
                        <form class="needs-validation" id="FormQuest" action="cadQuestionario.php" 
                        onsubmit="return cadQuest()" method="post">
                        <div class="form-row">
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

                        <button class="btn btn-primary mt-3" type="submit">Cadastrar</button>
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
                             
                    <script type="text/javascript">          
                      
                    $(document).ready(function() {
                       // alert('oi');
                       $("#FormQuest").on(".confirmacadastro",function() {
                            //alert('teste')
                           // var check = $("#FormQuest");

                            $( ".confirmacadastro" ).attr("disabled","true");

                                   
                           let   tituloQuest   = document.querySelector("#tituloQuest");
                           let   numPerg       = document.querySelector("#numPerg");
                           let   numResp       = document.querySelector("#numResp");
                                    
                                    url = '/prev0705/Servidor/requisicao/reqQuestionario.php';

                                    var dados = { oper: 1, tituloQuest: tituloQuest,numPerg: numPerg,numResp: numResp};
                                 
                                    $.ajax({

                                        url: '/prev0705/Servidor/requisicao/reqQuestionario.php',
                                        dataType: 'json',
                                        type: 'POST',
                                        data: dados, 

                                        beforeSend: function(){
                                            $("#FormQuest").html('Dados sendo enviados, aguarde...');
                                              
                                        },
                                        success: function(Obj){

                                            validaOk = Obj[0];

                                         /*   if (Obj[0] != "Ok"){
                                                marcaErro(Obj[2],Obj[3],Obj[1]);
                                            }

                                            $(".modal-body").html(Obj[1]);

                                            $('#modalOk').modal('show');

                                            $.unblockUI();

                                        },*/
                                       
                                    });

                                });
                            });                              

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
