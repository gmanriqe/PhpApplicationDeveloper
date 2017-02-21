<?php
$numero = 3;
switch ($numero) {
	
	case 1 :
		echo 'La variable tiene como valor 1';
	break;
	case 2 :
		echo 'La variable tiene como valor 2';
	break;
	case 3 :
		echo 'La variable tiene como valor 3';
	break;
	default :
		echo 'Es otro numero';
}

echo '<br/>';

if ($numero == 1){
	echo 'La variable tiene como valor 1';
}else if ($numero == 2){
	echo 'La variable tiene como valor 2';
}else if ($numero == 3){
	echo 'La variable tiene como valor 3';
}else {
	echo 'Es otro numero';
}

?>