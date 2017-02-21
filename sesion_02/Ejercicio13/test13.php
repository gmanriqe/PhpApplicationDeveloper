<?php 
	function incremento($a){
		$a += 10; // $a = $a + 10
		return $a; // $a = 30
	}
	
	$b = 20;
	
	echo incremento($b).'<br/>';
	echo $b;
	
?>