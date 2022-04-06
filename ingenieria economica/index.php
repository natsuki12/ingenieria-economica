<html>
	<head>
		<title>Boton Condicional</title>
	</head>
	<script type="text/javascript">
		function enviar(){
			var texto = document.getElementById("txtBox").value;
			if (texto == "Compuesto"){
				window.location = "http://localhost/ingenieria%20economica/compuesto.php"
			} else if (texto == "compuesto"){
				window.location = "http://localhost/ingenieria%20economica/compuesto.php"
			} else if (texto == "Simple"){
				window.location = "http://localhost/ingenieria%20economica/simple.php"
			} else if (texto == "simple"){
				window.location = "http://localhost/ingenieria%20economica/simple.php"
			} else {
				window.location = "http://localhost/ingenieria%20economica/index.php"
			}
		}
	</script>
	<body>
		<input type="text" id="txtBox" name="txtBox"/>
		<button onclick="enviar()">Enviar</button>
	</body>
</html>