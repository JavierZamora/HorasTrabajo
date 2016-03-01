<html>  
<head>
<meta charset="UTF-8"> 
<title>Hojas Trabajo</title>  
</head>  

<body>  
<form method="POST" action="">

	<!-- Campos de introducción de valores -->
    <p>Monitor</p>
     	<input type="radio" name="monitores" value="male" checked>Jorge Perez<br>
  		<input type="radio" name="monitores" value="female"> Javier Zamora	<br>
  		<input type="radio" name="monitores" value="other"> Pablo rodriguez<br>
   <p>Mes</p>
        <select name="mes"> <br>

	        <option value="01">Enero</option>

	        <option value="02">Febrero</option>

	        <option value="03">Marzo</option>

	        <option value="04">Abril</option>

	        <option value="05">Mayo</option>

	        <option value="06">Junio</option>

	        <option value="07">Julio</option>

	        <option value="08">Agosto</option>

	        <option value="09">Septiembre</option>

	        <option value="10">Octubre</option>

	        <option value="11">Noviembre</option>

	        <option value="12">Diciembre</option>

        </select>
   
    <p>Años</p>
     	  <input type="number" name="anio" min="2016" max="2030"><br>
    <p>Colegios</p>
    	<select name="colegios">
		  <option value="stmary">St Mary school</option> 
		  <option value="calassancia" selected>Classancias</option>
		  <option value="sanfrancisco">San Francisco</option>
		</select><br>

	<p>Selecion</p><input type="submit" value="horas" name="colegio">

   


    <!-- Botones de borrado de los campos y limpiado de resultados recientes en la pantalla -->
    <input type="reset" value="Borrar" name="reseteo">
    <input type="submit" action="form.php" value="Limpiar Resultados" name="limpiar"><br/><br/>
    <?php

    	include "funciones.php";
 		
 		#Control de evento de clickado sobre los botones operadores, y llamada a sus funciones
		if(isset($_POST['colegio'])){
		   colegios();
		}

	?>
</form> 

</body> 
</html>