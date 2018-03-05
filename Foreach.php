<?php

echo "<pre>";

$cadastro = [
	[
		"Produto" => "barra de aluminio",
		"Quant" => 100
	],

	[
		"Produto" => "barra de ferro",
		"Quant" => 120
	],

	[
		"Produto" => "fio de cobre",
		"Quant" => 160
	]
];

foreach ($cadastro as $chave) {
	echo "Os produtos localizados no estoque foram " . $chave["Produto"] . " e possuem a quantidade de " . $chave["Quant"] . "\n";

}


echo "<hr>";

$tintas = [
	[
		"Tipo" => "metelica",
		"Quant" => 40,
		"Cor" => "Vermelho"
	],
		[
		"Tipo" => "metelica",
		"Quant" => 20,
		"Cor" => "Verde"
	],
		[
		"Tipo" => "metalica",
		"Quant" => 25,
		"Cor" => "Amarelo"
	],
		[
		"Tipo" => "metelica",
		"Quant" => 60,
		"Cor" => "Azul"
	],
		[
		"Tipo" => "metelica",
		"Quant" => 12,
		"Cor" => "Rosa"
	]
];

echo "Foi encontrado no departamento de tintas : <br>";

foreach ($tintas as $key) {
	
	echo "A tinta do tipo " . $key["Tipo"]  ."\n";
	echo "Com a quantidade de " . $key["Quant"]  ."\n";
	echo "Na cor " . $key["Cor"]  ."\n";
}