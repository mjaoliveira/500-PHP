<?php

$n1 = readline("Coloque o valor da primeira Nota");
$n2 = readline("Coloque o valor da segunda Nota");
$nota = ($n1 + $n2)/2 ;


if ($nota >= 7) {
	echo "Sua nota foi $nota e está com status de APROVADO";
}elseif ($nota >= 5 and $nota < 7) {
	echo "Sua nota foi $nota e está com status de RECUPERACAO";
}elseif($nota < 5){
	echo "Sua nota foi $nota e está com status de REPROVADO";
}