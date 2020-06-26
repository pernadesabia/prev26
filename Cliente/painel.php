<?php
// Conexão
require_once '../Servidor/util/connection-prev-db.php';

// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../index.php');
endif;

// Dados
$id = $_SESSION['idUsuario'];
$query = "SELECT * FROM usuario WHERE idUsuario = '$id'";
$result = mysqli_query($con, $query);
$dados = mysqli_fetch_array($result);
mysqli_close($con);
?>


<!DOCTYPE html>

<html lang="PT-BR">
    <head>        
           
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistema Previsivel - Cliente</title>
        <link href="../admin-prev/dist/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <script src="../admin-prev/dist/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../admin-prev/dist/assets/demo/chart-area-demo.js"></script>
    <script src="../admin-prev/dist/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="../admin-prev/dist/assets/demo/datatables-demo.js"></script>
    </body>
</html>

</body>
</html>