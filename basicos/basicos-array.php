<?php

$frutas = array("platano", "manzana", "uvas", "fresas");

	print_r($frutas);
	echo "<br>";

	echo count($frutas) . " elementos" . "<br>";

	$edades = array("Ricardo" => 29, "Anahi" => 25, "Samuel" => 33);

	foreach($edades as $key => $value) {
		echo $key . " tiene el valor de " . $value . "<br>";
	}



?>
