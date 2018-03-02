<?php

echo"<pre>";

$nomes = ["Marcelo" , "4linux", "Jorge"];

$i = 0;
foreach ($nomes as $nome ) {
	echo ++$i . $nome . "<br>";
}

echo "<hr>";


$pessoa = [
	"nome" => "Marcelo",
	"idade" => 28,
	"altura" => 1.94
];

foreach ($pessoa as $valor) {
	echo $valor . "<br>";
}

echo "<hr>";

foreach ($pessoa as $chave => $valor) {
	echo "$chave -> $valor \n";
}

echo "<hr>";

