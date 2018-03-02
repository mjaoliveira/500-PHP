<?php

$idade = 15;

if ($idade <= 15) {
	echo "Não vota";
}elseif ($idade >=16 and $idade < 18) {
	echo "Voto Opicional";
}elseif ($idade >= 18 and $idade < 65){
	echo "voto obrigatorio";
}else{
	echo "Aposentado";
}

?>