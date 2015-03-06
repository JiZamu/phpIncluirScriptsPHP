<?php
	//Este script hace uso de areaCuadrada.php
	
	//para mostrar los errores
	ini_set('display_errors', true);
	error_reporting(E_ALL);

	$valor  = $_POST["valArea"];
	define("endl", "<br/>");

	//pone a dispocicion areaCuadrado.php
	//Esta funciona funciona similar a include su diferencia es el funcionamiento con error
	//require("areaCaudrado.php");
	include("areaCaudrado.php");

	print("Estos son los valores introducidos $valor".endl);
	print("El area del cuadrado es: ".calculaAreaCuadrado($valor).endl);
?>