<?php 
	if ($_POST ["capital"] !="" and $_POST ["interes"]!=""){
		if ($_POST["operador"] == "simple") {
			print ($resultado = $_POST ["capital"] + ( 1 + $_POST ["interes"] * 1));
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "resta") {
			print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "multiplicacion") {
			print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "division") {
			print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		}
	} else {
		print("Ingresa alg&uacute;n valor");
		print ('<br /><a href="calculadora.php">Volver</a>');
	}
?>