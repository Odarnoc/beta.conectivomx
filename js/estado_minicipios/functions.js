$(function(){

	// Lista de estados
	$.post( 'scripts_php/estados.php' ).done( function(respuesta)
	{
		$( '#estados' ).html( respuesta );
	});

	// lista de estados	
	$('#estados').change(function()
	{
		var el_estado = $(this).val();
		
		// Lista de municipios
		$.post( 'scripts_php/municipios.php', { estado: el_estado} ).done( function( respuesta )
		{
			$( '#municipios' ).html( respuesta );
		});
	});
	
	// Lista de municipios
	$( '#municipios' ).change( function()
	{
		var municipio = $(this).children('option:selected').html();
	});

})
