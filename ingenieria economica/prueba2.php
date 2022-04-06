<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seleccionar opción para mostrar un formulario u otro</title>
<link type="text/css" href="styles.css" rel="stylesheet">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
function mostrar(id) {
    if (id == "dma") {
        $("#dma").show();
        $("#2fechas").hide();

    }
    
    if (id == "2fechas") {
        $("#dma").hide();
        $("#2fechas").show();
    }
}
</script>
</head>

<body>
    <form action="resultado.php" method="post">
    <h1>Calculadora De Interes Simple</h1>
        <form action="resultado.php" method="post">

            <select name="operador">
                <option value="simple">Simple</option>
                <option value="compuesto">Compuesto</option>
            Ingresa Capital inicial:<br>
            <input type="text" name="capital"><br><br>
            Ingresa Tasa De Interes:<br />
            <input type="text" name="interes"><br><br>
<input type="reset" value="Borrar">
            <input type="submit" value="Enviar">
<form action="index.php" method="post">
    Estado actual: 
    <select id="status" name="status" onChange="mostrar(this.value);">
        <option value="dma">Dias, Meses y Años</option>
        <option value="2fechas">Entre 2 Fechas</option>

     </select>
</form>

<div id="dma" class="element" style="display: none;">
    <h2>Ingrese Los Dias, Meses y  Años...</h2>
    <form action="index.php" method="post">
        <p>Dias:<br/>
        <input type="text" name="dias" /></p>
        <p>Meses:<br/>
        <input type="text" name="meses" /></p>
        <p>Años:<br/>
        <input type="text" name="anos" /></p>
        <input type="submit" name="send" value="Enviar" />
    </form>
</div>

<div id="2fechas" class="element" style="display: none;">
    <h2>Ingrese las  2 Fechas...</h2>
    <form action="index.php" method="post">
        <p>Fecha 1:<br/>
        <input type="text" name="fecha1" /></p>
        <p>Fecha 2:<br/>
        <input type="text" name="fecha2" /></p>
        <input type="submit" name="send" value="Enviar" />
    </form>
</div>



</body>
</html>