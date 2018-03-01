<?php

$num = 5;

if  ($num % 2 == 0) {
	echo "este numero é Par";
}else{
	echo "este numero é Impar";
}

echo "<br/>";
$salario = 1800.00;
$tempoServico = 18; 
$temReclamacoes = false;

if ($salario >= 1000.00 and $tempoServico  >= 12 and $temReclamacoes == false) {
	echo "PROMOVIDO";
}else{
	echo "NAO FOI PROMOVIDO";
}

echo "<hr>";

$num2 = 8;

if  ($num2 % 2 == 0) {
	echo "este numero é Par";
}elseif($num2 % 2 == 1){
	echo "este numero é Impar";
}

echo "<hr>";

$num3 = 12;
switch (true) {
	case ($num3 % 2 == 0);
		echo "PAR";
		break;
	
	default:
		echo "IMPAR";
		break;
}
?>