<?php
function suma($a, $b) {
	$respuesta = $a + $b;
	return $respuesta;
}

function resta($a, $b = 5) {
	$respuesta = $a - $b;
	return $respuesta;
}

function multiplica($x, $y) {
	$rpta = $x * $y;
	return $rpta;
}

echo suma ( 9, 4 );
echo '<br/>';
/* Comentario para la funcion resta = Si no colocamos un segundo valor  
al llamar a la función resta tomara el valor por default en este caso el 5 */
echo resta ( 10 ); 
echo '<br/>';
echo multiplica ( 9, 4 );

?>