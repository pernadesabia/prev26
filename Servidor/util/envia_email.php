<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/Clubie/PHPMailer/class.phpmailer.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/Clubie/PHPMailer/class.smtp.php';

class Enviaemail{

    public function enviaSite($arrayEmail){

        $retorno = array();
 
        // Inicia a classe PHPMailer
        $mail = new PHPMailer(true);
         
        // Define os dados do servidor e tipo de conexão
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->IsSMTP(); // Define que a mensagem será SMTP
         
        try {
             $mail->Host = 'mail.clubie.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
             $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
             $mail->Port       = 25; //  Usar 587 porta SMTP
             $mail->Username = 'site@clubie.com.br'; // Usuário do servidor SMTP (endereço de email)
             $mail->Password = 'clubie1'; // Senha do servidor SMTP (senha do email usado)
             $mail->CharSet  = 'UTF-8';

             $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
             );
             //Define o remetente
             // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
             $mail->SetFrom('site@clubie.com.br', 'Site'); //Seu e-mail
             $mail->Subject = $arrayEmail['titulo'];//Assunto do e-mail
         
         
             //Define os destinatário(s)
             //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
             $mail->AddAddress('contato@clubie.com.br', 'Contato');
             
             //Campos abaixo são opcionais 
             //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
             //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
             //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
             //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
         
         
             //Define o corpo do email
             $corpoEmail = $arrayEmail['corpo'];
             $mail->MsgHTML($corpoEmail); 
         
             ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
             //$mail->MsgHTML(file_get_contents('arquivo.html'));
         
             if ($mail->send()) {
                $retorno = array("Ok","Enviado com êxito!");
             } else {
                $retorno = array("Erro","Falha ao enviar email!");
             }
             //caso apresente algum erro é apresentado abaixo com essa exceção.
            } catch (phpmailerException $e) {
              $retorno = array("Erro",$e->errorMessage()); //error messages from PHPMailer
            } catch (Exception $e) {
              $retorno = array("Erro",$e->getMessage());
            }

        return $retorno;
    
    }

    public function resetaSenha($arrayEmail){

        $retorno = array();
 
        // Inicia a classe PHPMailer
        $mail = new PHPMailer(true);
         
        // Define os dados do servidor e tipo de conexão
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->IsSMTP(); // Define que a mensagem será SMTP
         
        try {
             $mail->Host = 'mail.clubie.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
             $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
             $mail->Port       = 25; //  Usar 587 porta SMTP
             $mail->Username = 'site@clubie.com.br'; // Usuário do servidor SMTP (endereço de email)
             $mail->Password = 'clubie1'; // Senha do servidor SMTP (senha do email usado)
             $mail->CharSet  = 'UTF-8';

             $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
             );
             //Define o remetente
             // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
             $mail->SetFrom('site@clubie.com.br', 'Site'); //Seu e-mail
             $mail->Subject = $arrayEmail['titulo'];//Assunto do e-mail
         
         
             //Define os destinatário(s)
             //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
             $mail->AddAddress($arrayEmail['destino'], 'Contato');
             
             //Campos abaixo são opcionais 
             //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
             //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
             //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
             //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
         
         
             //Define o corpo do email
             $corpoEmail = $arrayEmail['corpo'];
             $mail->MsgHTML($corpoEmail); 
         
             ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
             //$mail->MsgHTML(file_get_contents('arquivo.html'));
         
             if ($mail->send()) {
                $retorno = array("Ok","Enviado com êxito!");
             } else {
                $retorno = array("Erro","Falha ao enviar email!");
             }
             //caso apresente algum erro é apresentado abaixo com essa exceção.
            } catch (phpmailerException $e) {
              $retorno = array("Erro",$e->errorMessage()); //error messages from PHPMailer
            } catch (Exception $e) {
              $retorno = array("Erro",$e->getMessage());
            }

        return $retorno;
    
    }

    public function enviaEmailInformado($arrayEmail){

        $retorno = array();
 
        // Inicia a classe PHPMailer
        $mail = new PHPMailer(true);
         
        // Define os dados do servidor e tipo de conexão
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->IsSMTP(); // Define que a mensagem será SMTP
         
        try {
             $mail->Host = 'mail.clubie.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
             $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
             $mail->Port       = 25; //  Usar 587 porta SMTP
             $mail->Username = 'site@clubie.com.br'; // Usuário do servidor SMTP (endereço de email)
             $mail->Password = 'clubie1'; // Senha do servidor SMTP (senha do email usado)
             $mail->CharSet  = 'UTF-8';

             $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
             );
             //Define o remetente
             // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
             $mail->SetFrom('site@clubie.com.br', 'Site'); //Seu e-mail
             $mail->Subject = $arrayEmail['titulo'];//Assunto do e-mail
         
         
             //Define os destinatário(s)
             //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
             $mail->AddAddress($arrayEmail['email'], $arrayEmail['nome']);
             
             //Campos abaixo são opcionais 
             //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
             //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
             //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
             //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
         
         
             //Define o corpo do email
             $corpoEmail = $arrayEmail['corpo'];
             $mail->MsgHTML($corpoEmail); 
         
             ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
             //$mail->MsgHTML(file_get_contents('arquivo.html'));
         
             if ($mail->send()) {
                $retorno = array("Ok","Enviado com êxito!");
             } else {
                $retorno = array("Erro","Falha ao enviar email!");
             }
             //caso apresente algum erro é apresentado abaixo com essa exceção.
            } catch (phpmailerException $e) {
              $retorno = array("Erro",$e->errorMessage()); //error messages from PHPMailer
            } catch (Exception $e) {
              $retorno = array("Erro",$e->getMessage());
            }

        return $retorno;
    
    }

    public function enviaEmailBoasVindas($arrayEmail){

        $retorno = array();
 
        // Inicia a classe PHPMailer
        $mail = new PHPMailer(true);
         
        // Define os dados do servidor e tipo de conexão
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->IsSMTP(); // Define que a mensagem será SMTP
         
        try {
             $mail->Host = 'mail.clubie.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
             $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
             $mail->Port       = 25; //  Usar 587 porta SMTP
             $mail->Username = 'site@clubie.com.br'; // Usuário do servidor SMTP (endereço de email)
             $mail->Password = 'clubie1'; // Senha do servidor SMTP (senha do email usado)
             $mail->CharSet  = 'UTF-8';

             $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
             );
             //Define o remetente
             // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
             $mail->SetFrom('site@clubie.com.br', 'Clubie'); //Seu e-mail
             $mail->Subject = 'Clubie lhe deseja boas-vindas';//Assunto do e-mail
         
         
             //Define os destinatário(s)
             //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
             $mail->AddAddress($arrayEmail['email'], $arrayEmail['nome']);
             
             //Campos abaixo são opcionais 
             //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
             //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
             //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
             //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
         
         
             //Define o corpo do email
             $corpoEmail = '<div>'.
                           '<div style="text-align: center;"><img src="https://www.clubie.com.br/Clubie/img/logo-boas-vindas.png" width=120 height=150></img></div><br>'.
                           '<p>Olá, '.$arrayEmail['nome'].':</p>'.
                           '<h3>O Clubie lhe dá as boas-vindas</h3>'.
                           '<p>Estamos felizes por sua iniciativa. Com o Clubie você desfruta seu tempo livre com mais qualidade de vida.</p>'.
                           '<a href="https://www.clubie.com.br/Clubie/login.php" style="color: green"><h3><b>COMECE A DESFRUTAR AGORA</b></h3></a>'.
                           '<p>Ainda estamos na versão Beta de nossos serviços, por isso suas sugestões são fundamentais para tornarmos ainda melhor sua experiência por meio do Clubie.</p>'.
                           '<p>Ficou com alguma dúvida ou tem alguma sugestão? Entre em contato conosco pelo email contato@clubie.com.br ou entre em <a href="https://www.clubie.com.br/Clubie/login.php" style="color: green"> nosso site.</a></p>'.
                           '<p><b>Clubie – A Economia que te deixa livre.<b></p>'.
                           '</div>';

             $mail->MsgHTML($corpoEmail); 
         
             ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
             //$mail->MsgHTML(file_get_contents('arquivo.html'));
         
             if ($mail->send()) {
                $retorno = array("Ok","Enviado com êxito!");
             } else {
                $retorno = array("Erro","Falha ao enviar email!");
             }
             //caso apresente algum erro é apresentado abaixo com essa exceção.
            } catch (phpmailerException $e) {
              $retorno = array("Erro",$e->errorMessage()); //error messages from PHPMailer
            } catch (Exception $e) {
              $retorno = array("Erro",$e->getMessage());
            }

        return $retorno;
    
    }

    public function enviaEmailCompraRealizada($arrayEmail){

        $retorno = array();
 
        // Inicia a classe PHPMailer
        $mail = new PHPMailer(true);
         
        // Define os dados do servidor e tipo de conexão
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->IsSMTP(); // Define que a mensagem será SMTP
         
        try {
             $mail->Host = 'mail.clubie.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
             $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
             $mail->Port       = 25; //  Usar 587 porta SMTP
             $mail->Username = 'site@clubie.com.br'; // Usuário do servidor SMTP (endereço de email)
             $mail->Password = 'clubie1'; // Senha do servidor SMTP (senha do email usado)
             $mail->CharSet  = 'UTF-8';

             $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
             );
             //Define o remetente
             // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
             $mail->SetFrom('site@clubie.com.br', 'Clubie'); //Seu e-mail
             $mail->Subject = 'Recebemos sua compra';//Assunto do e-mail
         
         
             //Define os destinatário(s)
             //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
             $mail->AddAddress($arrayEmail['email'], $arrayEmail['nome']);
             
             //Campos abaixo são opcionais 
             //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
             //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
             //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
             //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
         
         
             //Define o corpo do email
             $corpoEmail = '<div>'.
                           '<div style="text-align: center;"><img src="https://www.clubie.com.br/Clubie/img/logo-boas-vindas.png" width=120 height=150></img></div><br>'.
                           '<p>Olá, '.$arrayEmail['nome'].':</p>'.
                           '<h3>Obrigado por comprar conosco!</h3>'.
                           '<p>Recebemos sua confirmação de compra. Agora é só aproveitar sua economia de tempo que iremos cuidar do resto.</p>'.
                           '<p>Enviaremos notificações para você a cada atualização que for feita em sua compra!</p>'.
                           '<p></p>'.
                           '<p>Ainda estamos na versão Beta de nossos serviços, por isso suas sugestões são fundamentais para tornarmos ainda melhor sua experiência por meio do Clubie.</p>'.
                           '<p>Ficou com alguma dúvida ou tem alguma sugestão? Entre em contato conosco pelo email contato@clubie.com.br ou entre em <a href="https://www.clubie.com.br/Clubie/login.php" style="color: green"> nosso site.</a></p>'.
                           '<p><b>Clubie – A Economia que te deixa livre.<b></p>'.
                           '</div>';

             $mail->MsgHTML($corpoEmail); 
         
             ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
             //$mail->MsgHTML(file_get_contents('arquivo.html'));
         
             if ($mail->send()) {
                $retorno = array("Ok","Enviado com êxito!");
             } else {
                $retorno = array("Erro","Falha ao enviar email!");
             }
             //caso apresente algum erro é apresentado abaixo com essa exceção.
            } catch (phpmailerException $e) {
              $retorno = array("Erro",$e->errorMessage()); //error messages from PHPMailer
            } catch (Exception $e) {
              $retorno = array("Erro",$e->getMessage());
            }

        return $retorno;
    
    }
    
}

?>
