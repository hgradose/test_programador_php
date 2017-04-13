<!DOCTYPE html>
<html>
<head>
	<title>DETALLE DEL EMPLEADO</title>
</head>
<body>
 	
	 
	
	<br><br>
	<strong>DETALLE DEL EMPLEADO</strong> <?php echo $dataproducts[0]['id'] ?>

	<table>
		<tr>
			<td>nombre: </td>
			<td><?php echo $dataproducts[0]['name']  ?> </td>
		</tr>
		<tr>
			<td>Email: </td>
			<td><?php echo $dataproducts[0]['email']  ?> </td>
		</tr>
		<tr>
			<td>Celular: </td>
			<td><?php echo $dataproducts[0]['phone']  ?> </td>
		</tr>
		<tr>
			<td>Direcci&oacute;n: </td>
			<td><?php echo $dataproducts[0]['address']  ?> </td>
		</tr>
		<tr>
			<td>Posici&oacute;n: </td>
			<td><?php echo $dataproducts[0]['position']  ?> </td>
		</tr>
		<tr>
			<td>Salario: </td>
			<td><?php echo $dataproducts[0]['salary']  ?> </td>
		</tr>
		<tr>
			<td>Habilidades: </td>
			<td><?php foreach ($dataproducts[0]['skills'] as $key => $value) {
				echo $value['skill'] . ' ,  ';
			} ?> </td>
		</tr>

	</table>
	 

	<br>
	<a href="http://localhost/Slim_empezando/index.php/empleados/listado">Volver al listado</a>
 
	<br>

</body>
</html>