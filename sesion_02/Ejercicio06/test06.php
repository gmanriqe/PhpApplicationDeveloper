<?php
	$dias = array (
			'Domingo',
			'Lunes',
			'Martes',
			'Miercoles',
			'Jueves',
			'Viernes',
			'Sabado' 
	);
	
	$meses = array (
			'Enero' => 'mes bonito',
			'Febrero'=>'san valentin',
			'Marzo'=>'comienzo de clases',
			'Abril'=>'nose que se celebra',
			'Mayo'=>'dia de la madre',
			'Junio'=>'dia del padre',
			'Julio'=>'fiestas patrias',
			'Agosto'=>'nose que se celebra',
			'Setiembre'=> 203565,
			'Octubre'=>'halloween',
			'Noviembre'=>'nose que se celebra',
			'Diciembre'=>'navidad' 
	);
	
	//Aqui la variable $valor te arroja la posicion del arreglo
	foreach ($dias as $dia => $valor){
		echo $dia .'='. $valor .'<br/>';
	}
	echo '<br/>';
	/*Aqui la variable $valor te arroja el valor que le
	colocamos a cada elemento del arreglo*/
	foreach ($meses as $mes => $valor){
		echo $mes .' = '. $valor .'<br/>';
	}

?>