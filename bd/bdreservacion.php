<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BD Reservaciones</title>
</head>
<body>
	<h1>Proximas citas</h1>
	<hr>
	<h2>Tabla de citas</h2>
	<div class="verde">
		<a href="agregar.php">Agregar</a>
	</div>
	<table border="1">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>correo</th>
				<th>telefono</th>
				<th>mensaje</th>
				<th colspan="2">Acción</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				require("conexion.php");
				$consulta=mysqli_query($conexion,"SELECT * FROM reservaciones");

				while ($fila=mysqli_fetch_array($consulta)) {
					printf('
							<tr>
								<td>%s</td>
								<td>%s</td>
								<td>%s</td>
								<td>%s</td>
								
								<td><a href="borrar.php?id=%s">[Borrar]</a></td>
								
							</tr>

						',$fila["nombre"],$fila["correo"],$fila["telefono"],$fila["mensaje"],$fila["id"]);
				}

			 ?>
		</tbody>
	</table>
	<div class="verde">
		<a href="agregar.php">Agregar</a>
	</div>
</body>
</html>