
$(function(){

	// Pais
	function cliente(){
		$.ajax({
			type: 'GET',
			url: '../BLL/Cliente/Select.php',
			data: {
				acao: 'cliente'
			},
			dataType: 'json',
			success: function(data){
				console.log(data);
				
				for(i = 0; i < data.qtd; i++){
					$('select[name=cliente]').append('<option value="'+data.id[i]+'">'+data.nome[i]+'</option>');
				}
			}
		});
	}
    cliente();
});