<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agrega a base de datos </title>
</head>
<body>
	<h1>Agrega a base de datos </h1>
	<hr>
	<p><a href="bdreservacion.php">Reservaciones</a> &raquo; añadir:</p>

	<form action="#" method="post">
		<fieldset>
			<legend><em>Datos de la Reservación</em></legend>
			<table>
				<tr>
					<td><label>Nombre:</label></td>
					<td><input type="text" name="nombre"></td>
				</tr>
				<tr>
					<td><label>correo:</label></td>
					<td><input type="text" name="correo"></td>
				</tr>
				<tr>
					<td><label>telefono:</label></td>
					<td><input type="number" name="telefono"></td>
				</tr>
				<tr>
					<td><label>Descripcion:</label></td>
					<td><textarea name="mensaje"></textarea></td>
				</tr>
				<tr>
					<td><input type="reset" value="Borrar" name=""></td>
					<td><input type="submit" value="Enviar" name="enviar"></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<?php 
		if (isset($_POST["enviar"])) {
			$nombre=$_POST["nombre"];
			$correo=$_POST["correo"];
			$telefono=$_POST["telefono"];
			$mensaje=$_POST["mensaje"];
			

			require("conexion.php");

			$insertar=mysqli_query($conexion,"
				INSERT INTO
					reservaciones
					VALUES(
						NULL,
						'$nombre',
						'$correo',
						'$telefono',
						'$mensaje'
						   )
				");
			echo "<h3>Producto agregado con exito</h3>";
		}
		 ?>
</body>
</html>