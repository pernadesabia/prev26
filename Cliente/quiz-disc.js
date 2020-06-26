$(document).ready(function(){
//	insert_quest();
	selectDiscQuest();
	selectDiscPerg();

})

//função para cadastrar o questionario
function insert_quest()
{
	$(document).on('click','#btn_cadQuest',function(){
		var tituloQuest = $('#tituloQuest').val();
		var tipoQuest 	= $('#tipoQuest').val();
		
		if (tituloQuest =="" || tipoQuest=="") 
		{
			$('#msg_cadQuest').html('Digite em todos os campos!!!');
		}else{
			$.ajax({
				url: '/prev0705/Servidor/Questionario/insertQuest.php',
				method: 'post',
				data:{tituloQuest:tituloQuest,tipoQuest:tipoQuest},
				success: function(data){
					$('#msg_cadQuest').html(data).hide(5000);
					
					$('form').trigger('reset');
					selectQuest();
					//$('#modalOk').modal('show');
					//console.log(data);
				}
			})
		}
	})

	$(document).on('click','#btn_fecharModal',function(){
		$('form').trigger('reset');
		$('#msg_cadQuest').html('');
	})
	
}

//mostra na tela os questionarios cadastrados
function selectDiscQuest()
{
	
	$.ajax({
		url:'../Servidor/Questionario/selectDiscQuest.php',
		method:'post',
		success: function(data)
		{
			data = $.parseJSON(data);
			if(data.status=='success') 
			{
				$('#tableDisc').html(data.html)
			}
		}

	})
}

function selectDiscPerg()
{
	
	$.ajax({
		url:'Servidor/Questionario/selectDiscPerg.php',
		method:'post',
		success: function(data)
		{
			data = $.parseJSON(data);
			if(data.status=='success') 
			{
				$('#tableDiscResp').html(data.html)
			}
		}

	})
}


//chamada do botão editar

function edit_quest()
		{
			$(document).on('click','#btn_editQuest',function()
			{
				var idQ = $(this).attr('data-id');
				
				$.ajax(
				{
					url:'/prev0705/Servidor/Questionario/editQuest.php',
					method: 'post',
					data:{idQ:idQ},
					dataType: 'JSON',
					success: function(data)
					{
						//console.log(data);
						$('#edit_idQuest').val(data['idQuestionario']);
						$('#edit_tituloQuest').val(data['tituloQuest']);
						$('#edit_tipoQuest').val(data['tipoQuest']);
						$('#editQuest').modal('show');							
						selectQuest();
					}
				})
			})
		}

function edit_record_quest()
{

	$(document).on('click','#btn_updQuest',function(){
		var edit_id 	 = $('#edit_idQuest').val();
		var edit_tituloQ = $('#edit_tituloQuest').val();
		var edit_tipoQ   = $('#edit_tipoQuest').val();
		//console.log('#btn_updQuest');
		if (edit_tituloQ=="" || edit_tipoQ=="" ) {
			$('#msg_editQuest').html('Entre com os dados em ambos os campos!')
		}else{

			$.ajax({
				url:'/prev0705/Servidor/Questionario/updateQuest.php',
				method: 'post',
				data:{e_id:edit_id,e_tituloQ:edit_tituloQ,e_tipoQ:edit_tipoQ},
				success: function(data){
					$('#msg_editQuest').html(data).hide(5000);
					$('form').trigger('reset');
					selectQuest();
					
				}
			})	
		}

	})

}




function get_idQuest()
{
	$("body").on('click','#btn_cadPerg',function(){
  	let id = $(this).attr('data-id1');
  	console.log(id);
	});
}

