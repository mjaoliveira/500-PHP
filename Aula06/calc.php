<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Calculadora</title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="POST">
	<label>Numero 1</label>
	<input type="number" name="n1" placeholder="Digite um numero"><br>
	<label>Numero 2</label>
	<input type="number" name="n2" placeholder="Digite um numero"><br>
	<select name="op">
		<option value="mais">Adição</option>
		<option value="menos">Subtração</option>
		<option value="vezes">Multiplicação</option>
		<option value="divide">Divisão</option>
	</select>
	<input type="submit" value="Calcular">

<?php

if (!empty($_POST)) {

	switch ($_POST["op"]) {
		case 'mais':
			$result = $_POST["n1"] + $_POST["n2"];
			break;
		case 'menos':
			$result = $_POST["n1"] - $_POST["n2"];
			break;
		case 'vezes':
			$result = $_POST["n1"] * $_POST["n2"];
			break;
		case 'divide':
			$result = $_POST["n1"] / $_POST["n2"];
			break;
		}
		echo "$result";
}
?>

</form>
</body>
</html>