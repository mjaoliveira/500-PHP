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

echo "<hr>";

function podeDirigir($pessoa){
	if ($pessoa["idade"]  >= 18 and $pessoa ["temHabilitacao"]) {
		return "Pode Dirigir";
	}else{
		return "Nao pode dirigir";
	}
}

$marcelo = [
	'nome' => 'Marcelo',
	'idade'=> 28,
	'temHabilitacao' => true
	];

echo podeDirigir($marcelo);
echo podeDirigir($marcelo['idade'],$marcelo['temHabilitacao']);