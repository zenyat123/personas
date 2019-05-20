

	<form class = "form-horizontal" method = "post">
		
		<div class = "form-group">
			
			<label for = "documento" class = "col-sm-4 col-xs-12">N° de Documento:</label>

			<div class = "col-sm-8 col-xs-12">
				
				<input type = "text" name = "documento" class = "form-control" required>

			</div>

		</div>

		<div class = "form-group">
			
			<label for = "nombres" class = "col-sm-4 col-xs-12">Nombres:</label>

			<div class = "col-sm-8 col-xs-12">
				
				<input type = "text" name = "nombres" class = "form-control" required>

			</div>

		</div>

		<div class = "form-group">
			
			<label for = "apellidos" class = "col-sm-4 col-xs-12">Apellidos:</label>

			<div class = "col-sm-8 col-xs-12">
				
				<input type = "text" name = "apellidos" class = "form-control" required>

			</div>

		</div>

		<div class = "form-group">
			
			<label for = "telefono" class = "col-sm-4 col-xs-12">Teléfono:</label>

			<div class = "col-sm-8 col-xs-12">
				
				<input type = "text" name = "telefono" class = "form-control" required>

			</div>

		</div>

		<div class = "form-group">
			
			<label for = "fecha_nacimiento" class = "col-sm-4 col-xs-12">Fecha de Nacimiento:</label>

			<div class = "col-sm-8 col-xs-12">
				
				<input type = "date" name = "fecha_nacimiento" class = "form-control" required>

			</div>

		</div>

		<div class = "form-group">
			
			<label for = "email" class = "col-sm-4 col-xs-12">Correo Eléctronico:</label>

			<div class = "col-sm-8 col-xs-12">
				
				<input type = "email" name = "email" class = "form-control" required>

			</div>

		</div>

		<div class = "form-group">
			
			<button class = "btn btn-primary boton">Registrar</button>

		</div>

	</form>

	<div class = "modal fade" id = "modalActualizarPersona" role = "dialog">
		
		<div class = "modal-dialog">
			
			<div class = "modal-content">
				
				<div class = "modal-header">
					
					<button type = "button" class = "close" data-dismiss = "modal" aria-label = "close">

						<span aria-hidden = "true">&times;</span>

					</button>

					<h4>Actualizar Persona</h4>

				</div>

				<div class = "modal-body">
					
					<div class = "form-group">
						
						Documento:

						<input type = "text" class = "form-control actualizarDocumento" readonly>

					</div>

					<div class = "form-group">
						
						Nombres

						<input type = "text" class = "form-control actualizarNombres">

					</div>

					<div class = "form-group">
						
						Apellidos

						<input type = "text" class = "form-control actualizarApellidos">

					</div>

					<div class = "form-group">
						
						Teléfono:

						<input type = "text" class = "form-control actualizarTelefono">

					</div>

					<div class = "form-group">
						
						Fecha de Nacimiento:

						<input type = "date" class = "form-control actualizarFechaNacimiento">

					</div>

					<div class = "form-group">
						
						Correo Elétronico:

						<input type = "text" class = "form-control actualizarEmail">

					</div>

				</div>

				<div class = "modal-footer">
					
					<button type = "button" class = "btn btn-default" data-dismiss = "modal">Salir</button>

                	<button type = "button" class = "btn btn-primary botonActualizarPersona">Actualizar</button>

				</div>

			</div>

		</div>

	</div>

	<div class = "modal fade" id = "modalEliminarPersona" role = "dialog">

		<div class = "modal-dialog modal-sm">
			
			<div class = "modal-content">
				
				<div class = "modal-header">
					
					<button type = "button" class = "close" data-dismiss = "modal" aria-label = "close">

						<span aria-hidden = "true">&times;</span>

					</button>

					<h4>Confirmación de eliminación</h4>

				</div>

				<div class = "modal-body">
					
					<h4 id = "confirmacion"></h4>

				</div>

				<div class = "modal-footer">
					
					<button type = "button" class = "btn btn-default" data-dismiss = "modal">Salir</button>

                	<button type = "button" class = "btn btn-danger botonEliminarPersona">eliminar</button>

				</div>

			</div>

		</div>		

	</div>

	<?php

		$registrar_persona = new ControladorPersonas();
		$registrar_persona -> ControladorRegistrarPersona();

	?>