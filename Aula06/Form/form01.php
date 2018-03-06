<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>4Linux - Form</title>
	<script type="text/javascript"></script>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">			
	<h2>Meu Form</h2>
		<form action="" method="POST">
			<div>
			<label>Nome:</label> 		
			<input class = "form-control" type="text" name="nome" placeholder="Digite seu nome"> <br>
			</div>
			<div>
			<label>Email:</label>
			<input class = "form-control" type="email" name="email" placeholder="Digite seu email"><br>
			</div>
			<div>
			<label>Nascimento:</label>
			<input class = "form-control" type="date" name="Nasc" placeholder="Digite sua data de Nascimento"><br>
			</div>
			<div>
			<label>Altura:</label>
			<input class = "form-control" type="number" name="altura" placeholder="Digite sua altura em (cm)"> cm<br>
			</div>
			<div>
			<label>Sexo:</label>
			<input type="radio" name="sexo" value="Masculino"> Masculino 
			<input type="radio" name="sexo" value="Feminino"> Feminino <br>
			</div>
			<div>
			<label>Senha:</label>
			<input type="password" name="senha" placeholder="Digite a sua senha"><br>
			<input type="submit" value="Enviar">
			</div>
		</form>
</div>
		<?php
			if (!empty($_POST)) {
				echo "POST:";
				print_r($_POST);
			}


		?>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>