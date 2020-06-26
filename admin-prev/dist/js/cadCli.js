$(document).ready(function(){
	insert_cliente();
	login_cliente();
})

//função para cadastrar o cliente
function insert_cliente()
{
	$(document).on('click','#btn_cadCli',function(){
		//alert('09');
		var nome 			= $('#nome').val();
		var sobrenome 		= $('#sobrenome').val();
		var email		 	= $('#email').val();
		var senha		 	= $('#senha').val();
		var confirmasenha 	= $('#confirmasenha').val();
		
		if (senha =="" || confirmasenha=="") 
		{
				$('#msg_cadCli').html('<p class="bg-danger text-white">Digite em todos os campos!!!</p>').hide(15000);
			}else{
				$.ajax({
					url: '/prev0705/Servidor/Cliente/insertCliente.php',
					method: 'post',
					data:{
						nome:nome,
						sobrenome:sobrenome,
						email:email,
						senha:senha,
						confirmasenha:confirmasenha
					},
					success: function(data){
					
						//$('#msg_cadCli').html('<p class="bg-success text-white">Cadastro realizado com sucesso</p>').hide(10000);
						alert('Cadastro Realizado com sucesso')
						$('form').trigger('reset');					
						
				}
			})
		}
	})
}

function login_cliente()
{
	$(document).on('click','#btn_logCli',function(){
		//alert('09');
		var email		 	= $('#email').val();
		var senha		 	= $('#senha').val();
				
		if (email =="" || senha=="") 
		{
				$('#msg_cadCli').html('<p class="bg-danger text-white">Digite em todos os campos!!!</p>').hide(15000);
			}else{
				$.ajax({
					url: '/prev0705/Servidor/Coach/loginCoach.php',
					method: 'post',
					data:{email:email,senha:senha
					},
					success: function(data){
							
				}
			})
		}
	})
}	
/*
	$(document).on('click','#btn_fecharModal',function(){
		$('form').trigger('reset');
		$('#msg_cadCoach').html('');
	})
	
}*/

