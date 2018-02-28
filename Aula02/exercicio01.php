<?php

$n1 = readline("Coloque o valor da primeira Nota");
$n2 = readline("Coloque o valor da segunda Nota");
$nota = ($n1 + $n2)/2 ;


if ($nota >= 7) {
	echo "APROVADO";
}elseif ($nota >= 5 and $nota < 7) {
	echo "RECUPERACAO";
}elseif($nota < 5){
	echo "REPROVADO";
}