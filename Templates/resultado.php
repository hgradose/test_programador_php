<!DOCTYPE html>
<html>
<head>
	<title>LISTA DE EMPLEADOS</title>
</head>
<body>
 	EL RESULTADO DE LA BUSQUEDA: 

	<a href="http://localhost/Slim_empezando/cliente.php">Volver al formulario</a>
	<?php /* echo '<pre>'; ?>
 	<?php print_r($dataproducts); ?>
	<?php echo '</pre>';*/ ?>
	<br>
	<table  border=1>
		<tr>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>POSITION</td>
  
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