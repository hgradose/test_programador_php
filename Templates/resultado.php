<!DOCTYPE html>
<html>
<head>
	<title>LISTA DE EMPLEADOS</title>
</head>
<body>
 	EL RESULTADO DE LA BUSQUEDA: 

	<a href="../cliente.php">Volver al formulario</a>
	<?php /* echo '<pre>'; ?>
 	<?php print_r($dataproducts); ?>
	<?php echo '</pre>';*/ ?>
	<br>
	<table  border=1>
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>SALARY</td>
  
		</tr>

		
 		<?php foreach ($result as $key => $value) {  ?>
		<tr>
			<td><?php echo  $value->id ?></td>
			<td><?php echo $value->name ?></td>
			<td><?php echo $value->salary ?></td>
			
		</tr>
		<?php  } ?>

		
	</table>

</body>
</html>