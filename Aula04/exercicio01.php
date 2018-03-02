<?php

echo "<pre>";
$pessoa = [
	"id" => [
		"nome" => "Marcelo",
		"idade" => 28,
		"email" => "marcelo@gmail.com"
	],
	"id2" => [
		"nome" => "Jorge",
		"idade" => 22,
		"email" => "jorge@gmail.com"
	],
	"id3" => [
		"nome" => "Jean",
		"idade" => 24,
		"email" => "jean@gmail.com"
	]
];

foreach ($pessoa as $chave) {
	echo "Meu nome é " . $chave["nome"] . " tenho " . $chave["idade"] . " anos de idade e meu email é " . $chave["email"] . "\n" ;
}