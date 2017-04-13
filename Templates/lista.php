<!DOCTYPE html>
<html>
<head>
	<title>LISTA DE EMPLEADOS</title>
</head>
<body>
 	INGRESE UN EMAIL PARA BUSCAR:
	<form id="form1" action="<?php echo "resultado";  ?>" method="post">
		<input type="text"  name="busqueda"></input>
		<input type="submit"  ></input>
	</form>

	<a href="listado">Volver al listado</a>
	<?php /* echo '<pre>'; ?>
 	<?php print_r($dataproducts); ?>
	<?php echo '</pre>';*/ ?>
	<br>
	<table  border=1>
		<tr>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>POSITION</td>
			<td>SALARY</td>
			<td>OPCIONES</td>

		</tr>
 		<?php foreach ($dataproducts as $key => $value) {  ?>
		<tr>
			<td><?php echo $value['name']; ?></td>
			<td><?php echo $value['email']; ?></td>
			<td><?php echo $value['position']; ?></td>
			<td><?php echo $value['salary']; ?></td>
			<?php 

 			?>
			<td><a href="<?php echo 'detalle/'. $value['id']; ?>"
			>
			<?php echo  "DETALLE" ?></a></td>

		</tr>
		<?php  } ?>

		
	</table>

</body>
</html>