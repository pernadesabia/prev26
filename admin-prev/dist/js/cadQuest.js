$(document).ready(function(){
	insert_quest();
	selectQuest();
	edit_quest();
	edit_record_quest();
	get_idQuest();
	delete_quest();
	select_Quest_CP();
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
function selectQuest()
{
	
	$.ajax({
		url:'/prev0705/Servidor/Questionario/selectQuest.php',
		method:'post',
		success: function(data)
		{
			data = $.parseJSON(data);
			if(data.status=='success') 
			{
				$('#table').html(data.html)
			}
		}

	})
}


//chamada do botão editar
/*function edit_quest()
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
				console.log(data);
				$('#edit_idQuest').val(data[0]);
				$('#edit_tituloQuest').val(data[1]);
				$('#edit_tipoQuest').val(data[2]);
				$('#editQuest').modal('show');
			}
		})
	})
}*/
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

function delete_quest()
{
	$(document).on('click','#btn_delQuest',function()
	{
		var del_idQuest = $(this).attr('data-id2');
		$('#del_quest_modal').modal('show');

		$(document).on('click','#btn_delQuestConfirma',function()
		{
			$.ajax({
				url:'/prev0705/Servidor/Questionario/deleteQuest.php',
				method: 'post',
				data:{del_idQuest:del_idQuest},
				success: function(data)
				{
					$('#delMessage').html(data).hide(5000);
					selectQuest();
				}
			})
		})
	})
}


function get_idQuest()
{
	$("body").on('click','#btn_cadPerg',function(){
  	let id = $(this).attr('data-id1');
  	console.log(id);
	});
}

function select_Quest_CP()
{
	
	$.ajax({
		url:'/prev0705/Servidor/Pergunta/selectPerg.php',
		method:'post',
		success: function(data)
		{
			data = $.parseJSON(data);
			if(data.status=='success') 
			{
				$('#table').html(data.html);
			}
		}

	})
}
