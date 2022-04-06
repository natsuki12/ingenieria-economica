
<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora de Intereses</title>
	</head>
	<body>
		<h1>Calculadora</h1>
		<form action="resultado.php" method="post">
			<select name="operador">
				<option value="suma">Simple</option>
				<option value="resta">Compuesto</option>
			</select><br />
			Ingresa tu primer n&uacute;mero:<br />
			<input type="text" name="valor1"><br />
			Ingresa tu segundo valor:<br />
			<input type="text" name="valor2"><br>
			<select name="tiempo">
				<option value="Dias, Meses y Años">Dias, Meses y Años</option>
				<option value="Entre 2 Fechas">Entre 2 Fechas</option>
			</select><br />

			<input type="reset" value="Borrar">
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>