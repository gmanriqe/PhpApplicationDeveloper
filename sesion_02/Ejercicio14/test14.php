<?php 
	function incremento(&$a){
		$a += 10;
		return $a;
	}
	
	$b = 20;
	
	echo incremento($b); // 30
	echo '<br/>';
	echo $b; // 30
?>