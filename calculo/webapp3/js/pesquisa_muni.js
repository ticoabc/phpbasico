$(function(){
	$("#pesquisa_muni").keyup(function(){
		//Recuperar o valor do campo
		var pesquisa = $(this).val();
		
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}
			$.post('pesquisa_munic.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$(".resultado_muni").html(retorna);
			});
		}
	});
});