<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Peticion</title>
</head>
<body>
	<div class="container">
		<div class="get">
			<h1>Formulario POST</h1>
			<form action="recibir_post.php" method="post">
				<label for="">Correo</label><br>
				<input type="email" name="email" id="">

				<br>
				<label for="">Password</label><br>
				<input type="password" name="password" id="">

				<br>

				<input type="submit" value="Enviar">

				<div>
					<a href="recibir_get.php?tipo_usuario=nuevo&navegador=firefox">Registrar Cuenta</a>
				</div>

			</form>
		</div>
	</div>

</body>
</html>