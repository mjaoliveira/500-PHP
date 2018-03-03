<?php

function negrito(){
	echo "<strong>Negrito</strong> <br>";
}

negrito();

function italico($valor){
	echo "<i><b> $valor</b></i><br>";
}

italico("Italico");

echo "<hr>";

function quadrado($num){
	return $num * $num;
}

$var = quadrado(3);

echo $var;

echo "<hr>";

function cubo($num){
	return $num * $num * $num;
}

$var = cubo(2);

echo $var;

echo "<hr>";

$taxa = 1.09;

function taxar($valor){
	global $taxa;
	$valor = $valor * $taxa;
	return $valor;
}

$preco = 25;
$comtaxa = $taxar($preco);
echo "o preço deste livro é $preco. Com taxa, fica: $comtaxa";