<?php
	//Funciones para strings
	$mensaje = "Hoy voy a aprender mucho";

	//longitud
	echo strlen($mensaje) . "<br>";
	
	//Numero de palabras
	echo str_word_count($mensaje) . "<br>";

	//Reserva
	echo strrev($mensaje) . "<br>";


	//Encontrar texto, devuelve el indice donde se encuentra
	echo strpos($mensaje, "aprender") . "<br>";

	//Reemplazar texto
	echo str_replace("aprender", "nadar", $mensaje) . "<br>";

	//Convertir a minusculas
	echo strtolower($mensaje) . "<br>";

	//Convertir a mayusculas
	echo strtoupper($mensaje)  . "<br>";

	//Compara cadenas, en este ejemplo el a esta a 2 bytes de distancia
	echo strcmp("a", "a") . "<br>";

	//Substraer cadenas
	//en este caso extrae desde la posicion 10 hasta la posicion 18
	echo substr($mensaje, 10, 8) . "<br>";	

	//Remover espacios en blanco
	echo trim("       hola      mundo");

?>
