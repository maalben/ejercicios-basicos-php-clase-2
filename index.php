<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular nota definitiva</title>
</head>
<body>
<h1>Ejercicios estructurados</h1>    
<h2>Calcula nota definitiva</h2>
<h3>Tenga en cuenta los siguientes valores por calificación:</h3>
<form name="form1" method="POST" action="definitiva.php">

<table border="0">
    <tr>
        <td>Concepto</td>
        <td>Calificación</td>
    </tr>
    <tr>
        <td>Taller 1: 20%</td>
        <td><input type="number" id="txttaller1" name="txttaller1"></td>
    </tr>
    <tr>
        <td>Taller 2: 15%</td>
        <td><input type="number" id="txttaller2" name="txttaller2"></td>
    </tr>
    <tr>
        <td>Cuestionario 1:22%</td>
        <td><input type="number" id="txtcuestionario1" name="txtcuestionario1"></td>
    </tr>
    <tr>
        <td>Cuestionario 2:10%</td>
        <td><input type="number" id="txtcuestionario2" name="txtcuestionario2"></td>
    </tr>
    <tr>
        <td>Proyecto final: 33%</td>
        <td><input type="" type="number" id="txtproyectofinal" name="txtproyectofinal"></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" name="btncalcular" value="Calcular"></td>
       
    </tr>
</table>

</form>

<br><br><br>

<h2>Rango de edades</h2>
<form name="form2" method="POST" action="rangos.php">

<p>Ingresa tu edad: <input type="text" id="txtedad" name="txtedad"></p>
<p><input type="submit" name="btnevaluar" value="Evaluar"></p>

</form>


<br><br><br>

<h2>Consecutivo y sumatoria de números (POO)</h2>
<form name="form3" method="POST" action="proceso.php">

<p>Ingresa un número: <input type="text" id="txtnumero" name="txtnumero"></p>
<p><input type="submit" name="btnprocesar" value="Procesar"></p>

</form>




</body>
</html>



