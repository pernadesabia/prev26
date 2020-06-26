<?php

function isEmailValido($email){

    $conta = "/[a-zA-Z0-9\._-]+@";
    $domino = "[a-zA-Z0-9\._-]+.";
    $extensao = "([a-zA-Z]{2,4})$/";
    $pattern = $conta.$domino.$extensao;
 
    if (preg_match($pattern, $email))
        return true;
    else
        return false;

}


function validaCPF($cpf = null) {
 
    // Verifica se um número foi informado
    if(empty($cpf)) {
        return false;
    }
 
    // Elimina possivel mascara
    $cpf = preg_replace('[^0-9]', '', $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
    // Verifica se o numero de digitos informados é igual a 11 
    if (strlen($cpf) != 11) {
        return false;
    }
    // Verifica se nenhuma das sequências invalidas abaixo 
    // foi digitada. Caso afirmativo, retorna falso
    else if ($cpf == '00000000000' || 
        $cpf == '11111111111' || 
        $cpf == '22222222222' || 
        $cpf == '33333333333' || 
        $cpf == '44444444444' || 
        $cpf == '55555555555' || 
        $cpf == '66666666666' || 
        $cpf == '77777777777' || 
        $cpf == '88888888888' || 
        $cpf == '99999999999') {
        return false;
     // Calcula os digitos verificadores para verificar se o
     // CPF é válido
     } else {   
         
        for ($t = 9; $t < 11; $t++) {
             
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
 
        return true;
    }

}

function isCNPJValido($valor){

    $cnpj = str_pad(str_replace(array('.','-','/'),'',$valor),14,'0',STR_PAD_LEFT);
    
    if (strlen($cnpj) != 14):
        return false;
    else:
        for($t = 12; $t < 14; $t++):
            for($d = 0, $p = $t - 7, $c = 0; $c < $t; $c++):
                $d += $cnpj{$c} * $p;
                $p  = ($p < 3) ? 9 : --$p;
            endfor;
            $d = ((10 * $d) % 11) % 10;
            if($cnpj{$c} != $d):
                return false;
            endif;
        endfor;
        return true;
    endif;

}

function validaData($dat){

    $retorno = true;

    $data = explode("-",$dat); // fatia a string $dat em pedados, usando - como referência
    $d = $data[2];
    $m = $data[1];
    $y = $data[0];
 
    // verifica se a data é válida!
    // 1 = true (válida)
    // 0 = false (inválida)
    $res = checkdate($m,$d,$y);
    if ($res == 0){
       $return = false;
    }

    return $retorno;

}

function removerCodigoMalicioso($comSeguranca) {
   $comSeguranca = addslashes($comSeguranca);
   $comSeguranca = htmlspecialchars($comSeguranca);
   $comSeguranca = str_replace("SELECT","",$comSeguranca);
   $comSeguranca = str_replace("FROM","",$comSeguranca);
   $comSeguranca = str_replace("WHERE","",$comSeguranca);
   $comSeguranca = str_replace("INSERT","",$comSeguranca);
   $comSeguranca = str_replace("UPDATE","",$comSeguranca);
   $comSeguranca = str_replace("DELETE","",$comSeguranca);
   $comSeguranca = str_replace("DROP","",$comSeguranca);
   $comSeguranca = str_replace("DATABASE","",$comSeguranca);
     
   return $comSeguranca;
}

class Validacao{

    public function valida($nome_campo,$valor_campo,$tipo,$permite_vazio){

    	$validacao = array("Ok","Ok");

        if (strlen($valor_campo) <= 0 && $permite_vazio == 'N'){

            $validacao = array("Erro","Campo ".$nome_campo." não pode estar vazio!");

        } else {

            switch ($tipo) {
            
                case 'int': /* valida inteiro */

                    if (strlen($valor_campo) > 0){
                        
                        $valor_campo = (int) $valor_campo;

                        if(!is_integer($valor_campo)){
                            $validacao = array("Erro","Campo ".$nome_campo." com valor diferente de números!");
                        }

                    }
                    
                break;

                case 'str': /* valida texto */

                    if (strlen($valor_campo) > 0){
                     
                        if(!is_string($valor_campo)){
                            $validacao = array("Erro","Campo ".$nome_campo." com valor inválido!");
                        } 

                    }

                break;

                case 'dat': /* valida data */

                if (strlen($valor_campo) == 10){

                    if (!validaData($valor_campo)){
                        $validacao = array("Erro","Campo ".$nome_campo." com data inválida!");
                    }

                } else {

                    $validacao = array("Erro","Campo ".$nome_campo." com data inválida!");

                }

                break;

                case 'num': /* valida numero */

                    if (strlen($valor_campo) > 0){

                        $valor_campo = (float) $valor_campo;
                     
                        if(!is_numeric($valor_campo)){
                            $validacao = array("Erro","Campo ".$nome_campo." com valor diferente de números!");
                        }

                    }

                break;

                case 'arr': /* valida array */

                    if(!is_array($valor_campo)){
                        $validacao = array("Erro","Campo ".$nome_campo." com valor inválido!");
                    }

                break;

                case 'ema': /* valida email */
                    
                    if (strlen($valor_campo) > 0){
                     
                        if(!isEmailValido($valor_campo)){

                            $validacao = array("Erro","Campo ".$nome_campo." com email inválido!");

                        }

                    }
                    
                break;

                case 'sen': /* valida senha */

                    if (strlen($valor_campo) > 0){
                     
                        if(!is_string($valor_campo)){
                            $validacao = array("Erro","Campo ".$nome_campo." com valor inválido!");
                        } 

                    }

                break;

                case 'cpf': /* valida cpf */

                    if (strlen($valor_campo) > 0){

                        if (!validaCPF($valor_campo)){
                            $validacao = array("Erro", "Campo ".$nome_campo." com cpf inválido!");
                        }

                    }

                break;

                case 'cnp': /* valida cnpj */

                    if (strlen($valor_campo) > 0){

                        if (!isCNPJValido($valor_campo)){
                            $validacao = array("Erro", "Campo ".$nome_campo." com cnpj inválido!");
                        }

                    }

                break;

                case 'cep':

                    if (strlen($valor_campo) > 0){

                        if (!preg_match('/[0-9]{5,5}([-]?[0-9]{3})?$/', $valor_campo)){
                            $validacao = array("Erro", "Campo ".$nome_campo." com cep inválido!");
                        }

                    }

                break;

            }
    	
        }

		return $validacao;
        
    }
    
}

?>
