<?php

	require_once("../controladores/controlador_personas.php");
	require_once("../modelos/modelo_personas.php");

	class AjaxPersonas
	{

		public $documento;
		public $nommres;
		public $apellidos;
		public $telefono;
		public $fecha_nacimiento;
		public $email;

		/*======  Consultar Persona  ======*/


		public function AjaxConsultarPersona()
		{

			$campo = "documento";

			$valor = $this -> documento;

			$respuesta = ControladorPersonas::ControladorConsultarPersonas($campo, $valor);

			echo json_encode($respuesta);

		}

		/*======  Actualizar Persona  ======*/


		public function AjaxActualizarPersona()
		{

			$datos = array("documento" => $this -> documento,
						   "nombres" => $this -> nombres,
						   "apellidos" => $this -> apellidos,
						   "telefono" => $this -> telefono,
						   "fecha_nacimiento" => $this -> fecha_nacimiento,
						   "email" => $this -> email);

			$respuesta = ControladorPersonas::ControladorActualizarPersona($datos);

			echo $respuesta;

		}

		/*======  Eliminar Persona  ======*/


		public function AjaxEliminarPersona()
		{

			$campo = "documento";

			$valor = $this -> documento;

			$respuesta = ControladorPersonas::ControladorEliminarPersona($campo, $valor);

			echo $respuesta;

		}

	}

	/*======  Consultar Persona  ======*/


	if(isset($_POST["consultarDocumento"]))
	{

		$consultar_persona = new AjaxPersonas();
		$consultar_persona -> documento = $_POST["consultarDocumento"];
		$consultar_persona -> AjaxConsultarPersona();

	}

	/*======  Actualizar Persona  ======*/


	if(isset($_POST["actualizarDocumento"]))
	{

		$actualizar_persona = new AjaxPersonas();
		$actualizar_persona -> documento = $_POST["actualizarDocumento"];
		$actualizar_persona -> nombres = $_POST["actualizarNombres"];
		$actualizar_persona -> apellidos = $_POST["actualizarApellidos"];
		$actualizar_persona -> telefono = $_POST["actualizarTelefono"];
		$actualizar_persona -> fecha_nacimiento = $_POST["actualizarFechaNacimiento"];
		$actualizar_persona -> email = $_POST["actualizarEmail"];
		$actualizar_persona -> AjaxActualizarPersona();

	}

	/*======  Eliminar Persona  ======*/


	if(isset($_POST["eliminarDocumento"]))
	{

		$eliminar_persona = new AjaxPersonas();
		$eliminar_persona -> documento = $_POST["eliminarDocumento"];
		$eliminar_persona -> AjaxEliminarPersona();

	}