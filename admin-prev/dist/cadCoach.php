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
       <?php include('menu/nav.php');?>

        <div id="layoutSidenav">
            <?php include('menu/sidenav.php');?>
           
            <!--começo do cadastro das informações do coach-->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid card w-75 mt-5 mb-5 bg-light border-dark">
                        <h2 class="text-center">Cadastro de Coach</h2>
                        <form class="needs-validation mb-3" id="cadCoach" method="POST" novalidate>
                       
                        <p>Dados Pessoais</p>    
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom01"></label>
                                <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome" value="" required>
                                <div class="valid-feedback">ok!</div>
                                <div class="invalid-feedback">Digite o nome.</div>
                            </div>                        
                            <div class="col-md-5 mb-3">
                                <label for="validationCustom02"></label>
                                <input type="text" class="form-control" id="sobrenome" placeholder="Digite o Sobrenome" name="sobrenome" value="" required>
                                <div class="valid-feedback">ok!</div>
                                <div class="invalid-feedback">Digite o sobrenome.</div>
                            </div>                           
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom03"></label>
                                <input type="text" class="form-control" id="nomeFantasia" placeholder="Nome da empresa" name="nomeFantasia" value="" required>
                                <div class="valid-feedback">ok!</div>
                                <div class="invalid-feedback">Digite o nome da empresa.</div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom04"></label>                                
                                <input type="text" class="form-control" id="cpf" placeholder="Digite o n° do CPF" name="cpf" value="" required>
                                <div class="valid-feedback">ok!</div>
                                <div class="invalid-feedback">Digite o CPF.</div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom05"></label>
                                <input type="text" class="form-control" id="rg" placeholder="Digite o n° do RG" name="rg" value="" required>
                                <div class="valid-feedback">ok!</div>
                                <div class="invalid-feedback">Digite o RG.</div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom06"></label>
                                <input type="date" class="form-control" id="dataNascimento" placeholder="Digite a data" name="dataNascimento" value="" required>
                                <div class="valid-feedback">ok!</div>
                                <div class="invalid-feedback">Digite o data de Nascimento.</div>
                            </div> 
                            <div class="input-group col-md-4 mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="">Genero.</label>
                                </div>
                                <select class="custom-select" required="" name="genero" id="genero">
                                    <option selected></option>
                                    <option value="">Feminino</option>
                                    <option value="">Masculino</option>
                                </select>
                                <div class="valid-feedback">ok!</div>
                                <div class="invalid-feedback">Selecione o genero.</div>
                            </div>                            
                        </div><hr>

                        <p>Formas de Contato</p>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom07"></label>
                                <input type="tel" class="form-control" id="telefone" placeholder="Digite o n° do telefone " name="telefone" value="">
                            </div>                        
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom08"></label>
                                <input type="tel" class="form-control" id="celular" placeholder="Digite o n° do Celular" name="celular" value="" required>
                                <div class="valid-feedback">ok!</div>
                                <div class="invalid-feedback">Digite o n° do Celular.</div>
                            </div>                           
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom09"></label>
                                <input type="email" min="0" class="form-control" id="email" placeholder="Informe o e-mail válido" name="email" value="" required>
                                <div class="valid-feedback">ok!</div>
                                <div class="invalid-feedback">Informe o e-mail válido.</div>
                            </div>                                                       
                        </div><hr>

                        <p>Escolaridade</p>
                        <div class="form-row">
                            <div class="input-group col-md-7 mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="">Escolaridade</label>
                                </div>
                                <select class="custom-select" required="" name="escolaridade" id="escolaridade">
                                    <option selected></option>
                                    <option value="">Fundamental Incompleto</option>
                                    <option value="">Fundamental Completo</option>
                                    <option value="">Ensino Médio</option>
                                    <option value="">Graduação Superior</option>
                                    <option value="">Pós-Graduação</option>
                                    <option value="">Mestrado</option>
                                    <option value="">Doutorado</option>
                                    <option value="">Pós-Doutorado</option>
                                </select>
                                <div class="valid-feedback">ok!</div>
                                <div class="invalid-feedback">Selecione a escolaridade.</div>
                            </div>                                                                                 
                        </div><hr>

                        <p>Endereço</p>
                        <div class="form-row">
                            <div class="col-md-8 mb-3">
                                <label for="validationCustom11"></label>
                                <input type="text" class="form-control" id="endereco" placeholder="Digite o nome da Rua/Avenida" name="endereco" value="" required="">
                                <div class="valid-feedback">ok!</div>
                                <div class="invalid-feedback">Digite o nome do Logradouro.</div>
                            </div>                        
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom12"></label>
                                <input type="text" class="form-control" id="numero" placeholder="Digite o n° do local" name="numero" value="" required>
                                <div class="valid-feedback">ok!</div>
                                <div class="invalid-feedback">Digite o número.</div>
                            </div>                           
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom13"></label>
                                <input type="text" class="form-control" id="complemento" placeholder="Complemento" name="complemento" value="">
                            </div> 
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom14"></label>
                                <input type="text" max="6" class="form-control" id="bairro" placeholder="Bairro" name="bairro" value="">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom15"></label>
                                <input type="text" class="form-control" id="cep" placeholder="Digite o CEP" name="cep" value="" required>
                                <div class="valid-feedback">ok!</div>
                                <div class="invalid-feedback">Digite o número.</div>
                            </div>
                            <div class="col-md-7 mb-3">
                                <label for="validationCustom16"></label>
                                <input type="text" class="form-control" id="cidade" placeholder="Município" name="cidade" value="" required>
                                <div class="valid-feedback">ok!</div>
                                <div class="invalid-feedback">Digite o nome do Município.</div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="validationCustom17"></label>
                                <input type="text" class="form-control" id="uf" placeholder="UF" name="uf" value="" required>
                                <div class="valid-feedback">ok!</div>
                                <div class="invalid-feedback">Digite o estado.</div>
                            </div> 
                            <div class="input-group col-md-5 mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="">Tipo End.</label>
                                </div>
                                <select class="custom-select" required="" name="tipoEnd" id="tipoEnd">
                                    <option selected></option>
                                    <option value="">Comercial</option>
                                    <option value="">Residencial</option>
                                </select>
                                <div class="valid-feedback">ok!</div>
                                <div class="invalid-feedback">Selecione a tipo de endereço.</div>
                            </div>   
                        </div><hr>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom11"></label>
                                <input type="password" class="form-control" id="senha" placeholder="Digite a senha" name="senha" value="" required="">
                                <div class="valid-feedback">ok!</div>
                                <div class="invalid-feedback">Digite o nome do Logradouro.</div>
                            </div>                        
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom12"></label>
                                <input type="password" class="form-control" id="confirmasenha" placeholder="Confirme a senha" name="confirmasenha" value="" required>
                                <div class="valid-feedback">ok!</div>
                                <div class="invalid-feedback">Digite o número.</div>
                            </div>  
                        </div>    
                        <p>Insira uma imagem</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file col-md-5">
                                <input type="file" name="coach_img" class="custom-file-input" id="coach_img">
                                <label class="custom-file-label" for="inputGroupFile01">Escolha o arquivo</label>
                            </div>
                        </div><hr>
                        <div id="msg_cadCoach" class="bg-danger text-light"><strong></strong></div>

                        <button class="btn btn-primary mt-3 mb-3" id="btn_cadCoach" type="submit">Submit form</button>
                        </form>             
                        
                        <script>
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

              /*          $("#btn-cad-coach").on("click",function() {

                        url: "/prev0705/Servidor/requisicao/reqCoach.php";

                        var dataCoach = {
                            
                            oper: 1,
                            nome: $("#nome").val(), 
                            sobrenome: $("#sobrenome").val(),
                            nomeFantasia: $("#nomeFantasia").val(), 
                            cpf: $("#cpf").val(), 
                            genero: $("#genero").val(),
                            datanascimento: $("#datanascimento").val(),
                            telefone: $("#telefone").val(),
                            celular: $("#celular").val(),
                            email: $("#email").val(),
                            escolaridade: $("#escolaridade").val(),
                            endereco: $("#endereco").val(),
                            numero: $("#numero").val(),
                            complemento: $("#complemento").val(),
                            bairro: $("#bairro").val(),
                            cidade: $("#cidade").val(),
                            cep: $("#cep").val(),
                            uf: $("#uf").val(),
                            tipoEnd: $("#tipoEnd").val(),
                            coach_img: $("#coach_img").val() 

                            };
                            var envioDados = {
                              url: "/prev0705/Servidor/requisicao/reqCoach.php",
                              dataType: "text",
                              type: "POST",
                              data: { test: JSON.stringify(dataCoach) }, // Our valid JSON string
                              success: function( data, status, xhr ) {
                                 //...
                              },
                              error: function( xhr, status, error ) {
                                  //...
                              }
                            };
                            $.ajax(envioDados);

                       });                        

                        /*

                        $("#formCoach").on("click", function() {

                                         
                            url = '/prev0705/Servidor/requisicao/reqCliente.php';

                            var dados = { 
                                oper: 1, 
                                nome: nome,
                                sobrenome: sobrenome,
                                nomeFantasia: nomeFantasia, 
                                cpf: cpf, 
                                genero: genero,
                                datanascimento: datanascimento,
                                telefone: telefone,
                                celular: celular,
                                email: email,
                                escolaridade: escolaridade,
                                endereco: endereco,
                                numero: numero,
                                complemento: complemento,
                                bairro: bairro,
                                cidade: cidade,
                                cep: cep,
                                uf: uf,
                                tipoEnd: tipoEnd,
                                coach_img: coach_img
                            };
                         
                            $.ajax({

                                url: '/prev0705/Servidor/requisicao/reqCliente.php',
                                dataType: 'json',
                                type: 'POST',
                                data: dados, 

                                beforeSend: function(){
                                    $("#formCoach").html('Dados sendo enviados, aguarde...');
                                    if (isMobile())   {
                                        $.blockUI({ message: '<p>Dados sendo enviados, aguarde...</p>' });
                                    } else {
                                        $.blockUI({ message: '<h1>Dados sendo enviados, aguarde...</h1>' });
                                    }     
                                },
                                success: function(Obj){

                                    validaOk = Obj[0];

                                    if (Obj[0] != "Ok"){
                                        marcaErro(Obj[2],Obj[3],Obj[1]);
                                    }

                                    $(".modal-body").html(Obj[1]);

                                    $('#modalOk').modal('show');

                                    $.unblockUI();

                                },
                                error: function(data){

                                    $("#formCoach").html('<div class="alert alert-warning" role="alert">'+data[1]+'</div>');

                                    $.unblockUI();
                                }

                            });

                        });*/
                        </script>
                    </div>
                </main> 
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; feito por <a href="http://www.marketingfuel.com.br/">Marketink Fuel </a>and <a href="https://www.clubie.com.br/Clubie">Clubie</a> 
                            <script>
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
