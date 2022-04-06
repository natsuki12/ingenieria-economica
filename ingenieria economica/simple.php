
<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora de Interes Simple</title>
		<script type="text/javascript">
    function showContent() {
       // element = document.getElementById("content");

        if (showId="2fechas") {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
    function cambioOpciones()
{ 
    var element = document.getElementById('content');
    var showId = document.getElementById('opciones').value;
    document.getElementById('showId').value = showId;
    if (showId=="2fechas") {
        element.style.display='block';
    }
    else {
        element.style.display='none';
    }

}
</script>  
	</head>
	<body>
		<h1>Calculadora De Interes Simple</h1>
		<form action="resultado.php" method="post">
			Ingresa Capital inicial:<br />
			<input type="text" name="valor1"><br />
			Ingresa Tasa De Interes:<br />
			<input type="text" name="valor2"><br>
			<select name="tiempo">
				<option value="Dias, Meses y Años">Dias, Meses y Años</option>
				<option value="2fechas">Entre 2 Fechas</option>
			</select><br />

			<input type="text"  name="showId"  id='showId' value="" />

<div id="content" style="display: none;">
  <label for="ib" style="margin-left:8%;" >NSS*:</label> 
<input type="text" name="nss" id="nss" value=" " autocomplete="off" required  />

<!--   ///si no es necesario debe estar oculto en caso de ser cobrador asesor y gestor de cobranza  --->
<label for="cb" style="margin-left:2%;" >Dias, Meses y Años:</label> 
<input type="text" name="cb" id="cb" value=" " autocomplete="off" required  />
<input type="text" name="cb" id="cb" value=" " autocomplete="off" required  />
<input type="text" name="cb" id="cb" value=" " autocomplete="off" required  />

<label for="ib" style="margin-left:2%;" >Entre 2 Fechas:</label> 
<input type="text" name="ib" id="ib" value=" " autocomplete="off" required  />
<input type="text" name="cb" id="cb" value=" " autocomplete="off" required  />

			<input type="reset" value="Borrar">
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>