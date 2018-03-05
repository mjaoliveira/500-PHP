<?php

function soma ($a, $b){
	$s = $a + $b;
	echo "A soma vale $s";
}

soma(3,4);
echo "<br>";
soma(8,2);


echo "<hr>";


function mais ($a, $b){
	$s = $a + $b;
	return $s;
}
	$x = 3;
	$y = 4;
	$r = mais($x, $y);
	echo "A soma entre $x e $y eh igual a $r";

	echo "<hr>";

	function somar(){
		$p = func_get_args();
		$t = func_num_args();
		$s = 0;

		for ($i=0; $i < $t; $i++) { 
			$s += $p[$i];
		}
		return $s;
	}

	$res = somar(3,5,2);
	echo "A soma dos valores eh $res";