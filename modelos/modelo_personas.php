<?php

	include("conexion.php");

	class ModeloPersonas
	{

		/*======  Registrar Persona  ======*/


		static public function ModeloRegistrarPersona($tabla, $datos)
		{

			$registro = "insert into $tabla (documento, nombres, apellidos, telefono, fecha_nacimiento, email) 
			                          values (:documento, :nombres, :apellidos, :telefono, :fecha_nacimiento, :email)";

			$registrar = Conexion::Conectar()->prepare($registro);

			$registrar -> bindParam(":documento", $datos["documento"]);
			$registrar -> bindParam(":nombres", $datos["nombres"]);
			$registrar -> bindParam(":apellidos", $datos["apellidos"]);
			$registrar -> bindParam(":telefono", $datos["telefono"]);
			$registrar -> bindParam(":fecha_nacimiento", $datos["fecha_nacimiento"]);
			$registrar -> bindParam(":email", $datos["email"]);

			if($registrar -> execute())
			{

				return "Registrada";

			}
			else
			{

				return $registrar -> errorInfo();

			}

			$registrar -> close();

			$registrar = null;

		}

		/*======  Consultar Personas  ======*/


		static public function ModeloConsultarPersonas($tabla, $campo, $valor)
		{

			if($campo == "")
			{

				$consultar = Conexion::Conectar()->prepare("select * from $tabla");

				$consultar -> execute();

				return $consultar -> fetchAll();

			}
			else
			{

				$consultar = Conexion::Conectar()->prepare("select * from $tabla where $campo = :valor");

				$consultar -> bindParam(":valor", $valor);

				$consultar -> execute();

				return $consultar -> fetchAll();

			}

			$consultar -> close();

			$consultar = null;

		}

		/*======  Actualizar Persona  ======*/


		static public function ModeloActualizarPersona($tabla, $datos)
		{

			$actualiza = "update $tabla set nombres = :nombres, apellidos = :apellidos, telefono = :telefono, fecha_nacimiento = :fecha_nacimiento, email = :email where documento = :documento";

			$actualizar = Conexion::Conectar()->prepare($actualiza);

			$actualizar -> bindParam(":documento", $datos["documento"]);
			$actualizar -> bindParam(":nombres", $datos["nombres"]);
			$actualizar -> bindParam(":apellidos", $datos["apellidos"]);
			$actualizar -> bindParam(":telefono", $datos["telefono"]);
			$actualizar -> bindParam(":fecha_nacimiento", $datos["fecha_nacimiento"]);
			$actualizar -> bindParam(":email", $datos["email"]);

			if($actualizar -> execute())
			{

				return "Actualizada";

			}
			else
			{

				return $actualizar -> errorInfo();

			}

			$actualizar -> close();

			$actualizar = null;

		}

		/*======  Eliminar Persona  ======*/


		static public function ModeloEliminarPersona($tabla, $campo, $valor)
		{

			$eliminar = Conexion::Conectar()->prepare("delete from $tabla where $campo = :valor");

			$eliminar -> bindParam(":valor" ,$valor);

			if($eliminar -> execute())
			{

				return "Eliminado";

			} 
			else
			{

				return $eliminar -> errorInfo();

			}

			$eliminar -> close();

			$eliminar = null;

		}

	}