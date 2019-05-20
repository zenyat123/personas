<?php

	class ControladorPersonas
	{

		/*======  Registrar Persona  ======*/


		static public function ControladorRegistrarPersona()
		{

			if(isset($_POST["documento"]))
			{

				$datos = array("documento" => $_POST["documento"],
							   "nombres" => $_POST["nombres"],
							   "apellidos" => $_POST["apellidos"],
							   "telefono" => $_POST["telefono"],
							   "fecha_nacimiento" => $_POST["fecha_nacimiento"],
							   "email" => $_POST["email"]);

				$tabla = "persona";

				$respuesta = ModeloPersonas::ModeloRegistrarPersona($tabla, $datos);

			}			

		}

		/*======  Consultar Personas  ======*/


		static public function ControladorConsultarPersonas($campo, $valor)
		{

			$tabla = "persona";

			$respuesta = ModeloPersonas::ModeloConsultarPersonas($tabla, $campo, $valor);

			return $respuesta;

		}

		/*======  Consultar Tabla de Personas  ======*/


		static public function ControladorConsultarTablaPersonas()
		{

			$tabla = "persona";

			$campo = "";

			$valor = "";

			$respuesta = ModeloPersonas::ModeloConsultarPersonas($tabla, $campo, $valor);

			if($respuesta)
			{

				echo "

					<table class = 'table table-condensed tablaPersonas'>
	
						<tr>

							<th>Documento</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Teléfono</th>
							<th>Fecha de Nacimiento</th>
							<th>Correo Eléctronico</th>
							<th>Actualizar</th>
							<th>Eliminar</th>

						</tr>

				";

				foreach($respuesta as $llave => $valor) 
				{	

					$formatear_fecha = new DateTime($valor["fecha_nacimiento"]);	

					$fecha_nacimiento = $formatear_fecha -> format("d/m/Y");													
							
					echo "  

						<tr>

							<td>".$valor["documento"]."</td>
							<td>".$valor["nombres"]."</td>
							<td>".$valor["apellidos"]."</td>
							<td>".$valor["telefono"]."</td>
							<td>".$fecha_nacimiento."</td>
							<td>".$valor["email"]."</td>
							
							<td>

								<button class = 'btn btn-info botonActualizar' documento = ".$valor["documento"]." data-toggle = 'modal' data-target = '#modalActualizarPersona'>

									<i class = 'glyphicon glyphicon-pencil'></i>

								</button>

							</td>

							<td>

								<button class = 'btn btn-danger botonEliminar' documento = ".$valor["documento"]." data-toggle = 'modal' data-target = '#modalEliminarPersona'>

									<i class = 'glyphicon glyphicon-remove'></i>

								</button>

							</td>

						</tr>

					";

				}

				echo "</table>";

			}

		}

		/*======  Actualizar Persona  ======*/


		static public function ControladorActualizarPersona($datos)
		{

			$tabla = "persona";

			$respuesta = ModeloPersonas::ModeloActualizarPersona($tabla, $datos);

			return $respuesta;

		}

		/*======  Eliminar Persona  ======*/


		static public function ControladorEliminarPersona($campo, $valor)
		{

			$tabla = "persona";

			$respuesta = ModeloPersonas::ModeloEliminarPersona($tabla, $campo, $valor);

			return $respuesta;

		}

	}