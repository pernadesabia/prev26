$(document).ready(function(){
	//insert_Resp();
	//select_Quest_Perg();
})

//função para cadastrar o questionario
$("#cadResp").click(function () {
        //Receber os dados do formulário
        var dados = $("#formPerg").serialize();
        $.post("insert.php", dados, function (retorna) {
        $("#msg_cadPerg").slideDown('slow').html(retorna);

        //Limpar os campos
        //$('#add-aula')[0].reset();

        //Apresentar a mensagem leve
		retirarMsg();
	});
});


