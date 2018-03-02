<?php

$array = ["Lucas", "Marcelo", "Juliana"];
$array2 = array("Lucas", "Marcelo", "Juliana");


$pessoa = ["Marcelo", 28, 1.94];

for ($i=0; $i < 3; $i++) { 
	echo $pessoa[$i] . "<br>";
}
$pessoa = [
	"nome" => "Marcelo",
	"idade" => 28,
	"altura" => 1.94

];
print_r($pessoa["nome"]);



echo "<hr>";

$atributos = ["Marcelo", "Peixes",28 , "Bahia", "Programador", 1.94, 104];

for ($a=0; $a <7 ; $a++) { 
	echo $atributos[$a] . "<br>";

}

echo "<hr>";

$temp = [

	"2018" => [
		"Janeiro" => 28,
		"Fevereiro" => 29,
		"Marco" => 28
	],
	"2017" => [
		"Janeiro" => 27,
		"Fevereiro" => 26,
		"Marco" => 30
	]

];

print_r($temp["2017"]["Fevereiro"]);

?>