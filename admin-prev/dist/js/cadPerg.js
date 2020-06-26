$(document).ready(function(){
	insert_PergResp();
	select_Quest_Perg();
})

//função para cadastrar o questionario
function insert_PergResp()
{
	$(document).on('click','#btn_cadResp',function(){
		//alert('Teste!'); 
		var tituloPerg = $('#tituloPerg').val();
		//var tipoQuest 	= $('#tipoQuest').val();
		
		if (tituloPerg =="") 
		{
			$('#msg_cadPerg').html('<p class="bg-danger">Digite em todos os campos!!!</p>');
		}else{
			$.ajax({
				url: '/prev0705/Servidor/Pergunta/insertPerg.php',
				method: 'post',
				data:{tituloPerg:tituloPerg},
				success: function(data){
					$('#msg_cadPerg').html(data).hide(5000);
					setTimeout(function() {
					  window.location.reload(1);
					}, 5000); 
					
				}
			})
		}
	})

	$(document).on('click','#btn_fecharModal',function(){
		$('form').trigger('reset');
		$('#msg_cadQuest').html('');
	})
	
}


function select_Quest_Perg()
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
