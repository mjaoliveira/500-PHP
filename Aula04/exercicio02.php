<?php

echo "<pre>";

$cadastro = [
	[
		"Time" => "Palmeiras",
		"UF" => "SP",
		"Serie" => "A"
	],

	[
		"Time" => "Vasco",
		"UF" => "RJ",
		"Serie" => "A"
	],

	[
		"Time" => "Santa Cruz",
		"UF" => "PE",
		"Serie" => "C"
	],

	[
		"Time" => "Ponte Preta",
		"UF" => "SP",
		"Serie" => "B"
	],

	[
		"Time" => "Paysandu",
		"UF" => "PA",
		"Serie" => "B"
	],

	[
		"Time" => "Bahia",
		"UF" => "BA",
		"Serie" => "A"
	]
];

foreach ($cadastro as $chave) {
	echo "O " . $chave["Time"] . " é do estado de " . $chave["UF"] . " e vai jogar na serie " . $chave["Serie"] . "\n";
}