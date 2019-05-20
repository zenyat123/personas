<?php

	require_once("controladores/controlador_servidor.php");
	require_once("controladores/controlador_principal.php");

	require_once("controladores/controlador_personas.php");

	require_once("modelos/modelo_personas.php");

	$principal = new ControladorPrincipal();
	$principal -> Principal();