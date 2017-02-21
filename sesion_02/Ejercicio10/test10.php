<?php
	$cadena = '71998055,Jesus,Gonzales Manrique,Juan Barreto 289,Huacho';
	
	// convierte una CADENA en ARRAY especificando el carÃ¡cter delimitador â€œ | â€�
	$datos = explode( ",", $cadena );
	
	
	foreach ( $datos as $dato ) {
		echo $dato.'<br/>';
	}
	
	$cadena = implode('-', $datos);
	
	echo $cadena;

?>