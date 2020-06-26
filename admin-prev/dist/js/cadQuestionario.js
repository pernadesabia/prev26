$(document).ready(function(){

	$("#FormQuest").on("click",".confirmaQuestionario",function() {
		

			$( ".confirmaQuestionario" ).attr("disabled","true");

			var tituloQuest           = $("#tituloQuest").val();
	    	var numPerg               = $("#numPerg").val();
	    	var numResp               = $("#numResp").val();
	    	
	    

		    url = '../../../../prev0705/Servidor/requisicao/reqQuestionario.php';

		    var dados = { 
		    			oper: 1, 
		    			tituloQuest: tituloQuest,
		    			numPerg: numPerg,
		    			numResp: numResp
		    			};
		 
	  		$.ajax({

	            url: '../../../../prev0705/Servidor/requisicao/reqQuestionario.php',
	            dataType: 'json',
	            type: 'POST',
	            data: dados, 

	            beforeSend: function(){
	                $("#FormQuest").html('Dados sendo enviados, aguarde...');
	                
	            },
	            success: function(data){	
	            	
		            $(".modal-body").html("Nem sei o que deve aparecer aqui");

		            $('#modalOk').modal('show');
		            location.reload();
		     
	            },
	            error: function(data){

	                $("#FormQuest").html('<div class="alert alert-warning" role="alert">Erro ao concluir o cadastro</div>'+
	                	'<img src="assets/img/cry.png" width="20%"><br>'+
	                	'<button class="btn btn-info"><a style="color: white;" href="http://localhost/prev0705/admin-prev/dist/cadQuestionario.php">Voltar</a></div>');


	              //  $.unblockUI();
	            }

	        });

	    })
  	
  	function isMobile(){

		var userAgent = navigator.userAgent.toLowerCase();
		
		if( userAgent.search(/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i)!= -1 )
			return true;

	}

	$("#btnModal").on("click",function(){

		if(validaOk == "Ok"){


			$("#FormQuest").html(
				'Cadastro realizado com sucesso! Preencha agora as perguntas cadastradas! <br>' +
				'<a href="index.php"><button type="button" class="btn btn-default btn-lg" style="margin-top: 5px;">Cadastro Perguntas</button></a>'
			);
    		
    	} 

    	$("#msgBtn").html("");

    	$( ".confirmaQuestionario" ).removeAttr("disabled");

    	$('#modalOk').modal('hide');

	});
	function marcaErro(campos,abas,txtErros){

		//var strCp = campos.substring(0, campos.length-1);
		//var strEr = txtErros.substring(0, txtErros.length-4);

		var cp    = strCp.split(',');
		var erros = strEr.split('<br>');
		var loc   = "N";

		for (var i = 0; i < cp.length; i++){

			for (var r = 0; r < respostas.length; r++){

				for (var n = 0; n < respostas[r].length; n++){

					if (respostas[r][n]['chave'] == cp[i]){

						respostas[r][n]['erro'] = erros[i];

						if (loc == "N"){
							numAtual = r;
							loc="S";
						}

					} 

				}

			}

		}

		desenhaQuadros();

	}

	
	});

