<!DOCTYPE html>
<html>
<head>
	<title>LISTA DE EMPLEADOS</title>
</head>
<body>
 	<strong>INGRESE UN RANGO DE SALARIOS PARA ENCONTRAR EMPLEADOS:</strong><BR><BR>
	<form id="form1" action="<?php echo "http://localhost/Slim_empezando/cliente.php/procesar_web_service";  ?>" method="post">
		<table>
		<tr>
			<td>VALOR INICIAL:</td>
			<td><input type="text"  name="salario1"></input></td>
		</tr>
		<tr>
			<td>VALOR FINAL:</td>
			<td><input type="text"  name="salario2"></input></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit"  ></input></td>
		</tr>
		 
		</table>
	</form>

	 

</body>
</html>