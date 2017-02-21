<?php 
	$cadena = '71998055,Jesus,Gonzales Manrique,Juan Barreto 289,Huacho';
	
	list($dni, $nombre, $apellido, $direccion, $ciudad) = explode(',',$cadena);
	
	echo $dni.'<br/>';
	echo $nombre.'<br/>';
	echo $apellido.'<br/>';
	echo $direccion.'<br/>';
	echo $ciudad.'<br/>';
	
	echo '<br/>';
	
	$datos_array = explode('-', $cadena);
	echo $datos_array.'<br/>'; //Array
	
	foreach ($datos_array as $dato){
		echo $dato.'<br/>';
	}
	echo '<br/>';
	
	$datos = implode('-',$datos_array);
	echo $datos.'<br/>'; //string
	echo gettype($datos);

?>