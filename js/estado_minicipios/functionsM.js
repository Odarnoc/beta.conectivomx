$(function(){

	// Lista de estados
	$.post( 'scripts_php/estados.php' ).done( function(respuesta)
	{
		$( '#estadosM' ).html( respuesta );
	});

	// lista de estados	
	$('#estadosM').change(function()
	{
		var el_estado = $(this).val();
		
		// Lista de municipios
		$.post( 'scripts_php/municipios.php', { estado: el_estado} ).done( function( respuesta )
		{
			$( '#municipiosM' ).html( respuesta );
		});
	});
	
	// Lista de municipios
	$( '#municipiosM' ).change( function()
	{
		var municipio = $(this).children('option:selected').html();
	});

})
