<?php 

$nome = "Marcelo";
$idade = 28;
$peso = 103.5;
$V_ou_F = true;
$sexo = NULL;
$times = ['Bahia' , 'Vasco', 'Palmeiras'];


echo "$nome";
echo "<br>";
echo "$idade";
echo "<br>";
echo "$peso";
echo "<br>";
echo "$V_ou_F";
echo "<br>";
echo "$sexo";
echo "<br>";
echo "$times[0]";

echo "<hr>";
var_dump($nome, $idade, $peso, $V_ou_F, $sexo, $times);

echo "<hr>";

$valor = 50;
$cast = (float) $valor;
var_dump($cast);
$cast = (string) $valor;
var_dump($cast);
$cast = (boolean) $valor;
var_dump($cast);

echo "<hr>";

const ALUNOS = 15;
var_dump(ALUNOS);

echo "<hr>";

$num = "1";
var_dump($num);
$num = $num + 5.5;
var_dump($num);
$num = $num + 3;
var_dump($num);
$num = 5 + "10 numeros";
var_dump($num);
$num = "2 numeros" + "2 numeros";
var_dump($num);
 ?>