<?php 
	$meses = array (
			'Enero',
			'Febrero',
			'Marzo',
			'Abril',
			'Mayo',
			'Junio',
			'Julio',
			'Agosto',
			'Setiembre',
			'Octubre',
			'Noviembre',
			'Diciembre'
	);
	
	$contadorMeses= count($meses);
	echo "Son $contadorMeses los meses del año<br/>";
	
	echo '<br/>';
	
	for( $i=0 ; $i<count($meses) ; $i++){
		echo $i .'='. $meses[$i] .'<br/>';
	} 
	
	echo '<br/>';
	
	foreach ($meses as $mes => $valor){
		echo $mes .'='. $valor .'<br/>';
	}
	
?>