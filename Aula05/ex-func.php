<?php

echo "<pre>";

function parImpar($valor){
	if ($valor % 2 == 0){
		return "Par";
	}else{
		return "Impar";
	}
}
echo parImpar(6);

echo "<hr>";

function maior($num1,$num2){
	if($num1 > $num2){
		return $num1;
	}elseif ($num1 < $num2) {
		return $num2;
	}else{
		return "Os dois são iguais";
	}
}

echo maior(9,10);

echo "<hr>";

function maiorIdade($idade){
	if ($idade >= 18) {
		return "Maior idade";
	}else{
		return "Menor de idade";
	}
}

echo maiorIdade (25);