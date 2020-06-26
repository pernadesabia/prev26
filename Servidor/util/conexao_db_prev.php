<?php

class Conexao{
    
    public function conexao($tip="sel"){

    	$conecta = null;

    	if ($tip == 'sel'){

            try {

                $conecta = new PDO('mysql:host=localhost;dbname=teste', 'root', '');
                $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch(PDOException $e) {

                echo 'ERROR: ' . $e->getMessage();

            }
    		
    	}

    	if ($tip == 'upd'){

            try {

                $conecta = new PDO('mysql:host=localhost;dbname=teste', 'root', '');
                $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch(PDOException $e) {

                echo 'ERROR: ' . $e->getMessage();

            }
    		
    	}

    	if ($tip == 'ins'){

            try {

                $conecta = new PDO('mysql:host=localhost;dbname=teste', 'root', '');
                $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch(PDOException $e) {

                echo 'ERROR: ' . $e->getMessage();

            }
    		
    	}

        if ($tip == 'del'){

            try {

                $conecta = new PDO('mysql:host=localhost;dbname=teste', 'root', '');
                $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch(PDOException $e) {

                echo 'ERROR: ' . $e->getMessage();

            }
            
        }
    	
		return $conecta;
        
    }
    
}

?>
