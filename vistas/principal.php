<!DOCTYPE html>

<html>

<head>

	<meta charset = "utf-8">
	<title>Personas</title>

	<?php

		$servidor = Servidor::Ubicacion();

	?>

	<link href = "<?php echo $servidor ?>/css/bootstrap.css" rel = "stylesheet">
	<link href = "<?php echo $servidor ?>/css/estilos.css" rel = "stylesheet">

	<script src = "<?php echo $servidor ?>/js/jquery.js"></script>
	<script src = "<?php echo $servidor ?>/js/bootstrap.js"></script>

</head>

<body>

	<div class = "container-fluid">

		<div class = "container">

			<h1 class = "text-center titulo">SRP (Sistema de Registro de Personas)</h1>

			<?php

				echo "<div class = 'col-xs-6'>";

					include("contenidos/personas.php");

				echo "</div>";

				echo "<div class = 'col-xs-6'>";

					include("contenidos/menu.php");

				echo "</div>";			

				$personas = ControladorPersonas::ControladorConsultarTablaPersonas();

			?>

		</div>

	</div>

	<input type = "hidden" value = "<?php echo $servidor ?>" id = "servidor">

	<script src = "<?php echo $servidor ?>/js/principal.js"></script>
	
</body>

</html>