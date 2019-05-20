

/*======  Ruta del Servidor  ======*/


var servidor = $("#servidor").val();

/*======  Actualizar Persona  ======*/


$(".botonActualizar").click(function()
{

	//  Consultar Persona   

	var documento = $(this).attr("documento");

	var datos = new FormData();

	datos.append("consultarDocumento", documento);

	$.ajax
	({

		url: servidor + "/ajax/ajax_personas.php",
		method: "post",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta)
		{

			$("#modalActualizarPersona .actualizarDocumento").val(respuesta[0]["documento"]);
			$("#modalActualizarPersona .actualizarNombres").val(respuesta[0]["nombres"]);
			$("#modalActualizarPersona .actualizarApellidos").val(respuesta[0]["apellidos"]);
			$("#modalActualizarPersona .actualizarTelefono").val(respuesta[0]["telefono"]);
			$("#modalActualizarPersona .actualizarFechaNacimiento").val(respuesta[0]["fecha_nacimiento"]);
			$("#modalActualizarPersona .actualizarEmail").val(respuesta[0]["email"]);

			//  Actualizar Persona

			$(".botonActualizarPersona").click(function()
			{

				var actualizarDocumento = $("#modalActualizarPersona .actualizarDocumento").val();
				var actualizarNombres = $("#modalActualizarPersona .actualizarNombres").val();
				var actualizarApellidos = $("#modalActualizarPersona .actualizarApellidos").val();
				var actualizarTelefono = $("#modalActualizarPersona .actualizarTelefono").val();
				var actualizarFechaNacimiento = $("#modalActualizarPersona .actualizarFechaNacimiento").val();
				var actualizarEmail = $("#modalActualizarPersona .actualizarEmail").val();

				var datos = new FormData();

				datos.append("actualizarDocumento", actualizarDocumento);
				datos.append("actualizarNombres", actualizarNombres);
				datos.append("actualizarApellidos", actualizarApellidos);
				datos.append("actualizarTelefono", actualizarTelefono);
				datos.append("actualizarFechaNacimiento", actualizarFechaNacimiento);
				datos.append("actualizarEmail", actualizarEmail);

				$.ajax
				({

					url: servidor + "/ajax/ajax_personas.php",
					method: "post",
					data: datos,
					cache: false,
					contentType: false,
					processData: false,
					success: function(respuesta)
					{

						if(respuesta == "Actualizada")
						{
							
							window.location = servidor;						 

						}

					}

				})

			})

		}

	})

})

/*======  Eliminar Persona  ======*/


$(".botonEliminar").click(function()
{ 

	var documento = $(this).attr("documento");

	$("#confirmacion").html("Confirma que desea eliminar el registro: " + documento);

	$(".botonEliminarPersona").click(function()
	{

		var datos = new FormData();

		datos.append("eliminarDocumento", documento);

		$.ajax
		({

			url: servidor + "/ajax/ajax_personas.php",
			method: "post",
			data: datos,
			cache: false,
			contentType: false,
			processData: false,
			success: function(respuesta)
			{

				if(respuesta == "Eliminado")
				{

					window.location = servidor;

				}

			}

		})

	})

})

