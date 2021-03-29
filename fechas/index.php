<?php
	/*
	 	d - dia del mes(1-31)
		m - mes del año(1-12)
		Y - año(4 digitos)
		l - dia de la semana

		h - hora en formato 1-12
		i - minutos 0-59
		s - segundos 0-59
		a - am/pm
	 
	 */

	echo "Fecha: " . date("d-m-Y") . "<br>";
	echo "Son las " . date("h:i:sa");

?>
