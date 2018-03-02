<?php

$var1 = 4;
$var2 = 2;
$soma = $var1 + $var2;
$menos = $var1 - $var2;
$mult = $var1 * $var2;
$divi = $var1 / $var2;
$modulo = $var1 % $var2;

echo "$soma<br/>";
echo "$menos<br/>";
echo "$mult<br/>";
echo "$divi<br/>";
echo "$modulo<br/>";

echo "<hr>";

$num = 3;
$num += 5;
echo "$num<br/>";
$num -= 3;
echo "$num<br/>";
$num *= 10;
echo "$num<br/>";
$num /= 2;
echo "$num<br/>";

for ($cont=0; $cont <= 10 ; $cont++) { 
	echo "$cont...";
}
echo "<br/>";

for ($cont=100; $cont >= 89 ; $cont--) { 
	echo "$cont...";
}

echo "<hr>";


$num1 = 6;
$num2 = 2;

var_dump($num1 == $num2);
var_dump($num1 === $num2);
var_dump($num1 != $num2);
var_dump($num1 < $num2);
var_dump($num1 > $num2);
var_dump($num1 <= $num2);
var_dump($num1 >= $num2);

echo "<hr>";

$a = true;
$b = false;


var_dump($a and $b);
var_dump($a and $a);

var_dump($a or $b);
var_dump($a or $a);

var_dump($a xor $b);
var_dump($a xor $a);

var_dump(!$a);
var_dump(!$b);

?>