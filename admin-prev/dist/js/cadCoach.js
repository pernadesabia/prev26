$(document).ready(function(){
	insert_coach();
	//select_coach();
})

//função para cadastrar o questionario
function insert_coach()
{
	$(document).on('click','#btn_cadCoach',function(){
		var nome 			= $('#nome').val();
		var sobrenome 		= $('#sobrenome').val();
		var nomeFantasia 	= $('#nomeFantasia').val();
		var cpf			 	= $('#cpf').val();
		var rg 		    	= $('#rg').val();
		var dataNascimento 	= $('#dataNascimento').val();
		var genero		 	= $('#genero').val();
		var telefone	 	= $('#telefone').val();
		var celular 		= $('#celular').val();
		var email		 	= $('#email').val();
		var escolaridade 	= $('#escolaridade').val();
		var endereco	 	= $('#endereco').val();
		var numero		 	= $('#numero').val();
		var complemento 	= $('#complemento').val();
		var bairro		 	= $('#bairro').val();
		var cep 			= $('#cep').val();
		var cidade		 	= $('#cidade').val();
		var uf			 	= $('#uf').val();
		var tipoEnd		 	= $('#tipoEnd').val();
		var coach_img	 	= $('#coach_img').val();
		var senha		 	= $('#senha').val();
		var confirmasenha 	= $('#confirmasenha').val();
		
		if (nome =="" || sobrenome=="" || cpf=="") 
		{
			$('#msg_cadCoach').html('Digite em todos os campos!!!');
		}else{
			$.ajax({
				url: '/prev0705/Servidor/Coach/insertCoach.php',
				method: 'post',
				data:{
					nome:nome,
					sobrenome:sobrenome,
					nomeFantasia:nomeFantasia,
					cpf:cpf,
					rg:rg,
					dataNascimento:dataNascimento,
					genero:genero,
					telefone:telefone,
					celular:celular,
					email:email,
					escolaridade:escolaridade,
					endereco:endereco,
					numero:numero,
					complemento:complemento,
					bairro:bairro,
					cep:cep,
					cidade:cidade,
					uf:uf,
					tipoEnd:tipoEnd,
					coach_img:coach_img,
					senha:senha,
					confirmasenha:confirmasenha
				},
				success: function(data){
					$('#msg_cadCoach').html('Cadastro realizado com sucesso');
					//$('form').trigger('reset');
					
					//console.log(data);
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

