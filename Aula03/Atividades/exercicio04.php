<?php


$cont = 0;
while ( $cont <= 10) {
	echo "$cont...";
	$cont ++;
}

echo "<br>";

$cont = 0;
while ( $cont <= 20) {
	echo "$cont...";
	$cont += 2;
}

echo "<br>";

$cont = 0;
while ( $cont <= 20) {
	if ($cont % 2 != 0) {
		echo "$cont...";
	}
	
	$cont ++;
}

echo "<hr>";

$cont1 = 0;


do{
	echo "$cont1...";
	$cont1 ++;
}while ($cont1 <= 10) ;


echo "<hr>";

for ($i=0; $i <= 10 ; $i++) { 
	echo "$i...";
}

echo "<hr>";

$a = 10;

for ($a=10; $a <=50 ; $a++) { 
	if ($a % 5 == 0) {
		continue;
	}
	echo "$a...";
}

echo "<br>";

$a = 200;

for ($a=200; $a <=300 ; $a++) { 
	if ($a == 277) {
		break;
	}
	echo "$a...";
}
// http://www.dontpad.com/500/lm/ex

?>