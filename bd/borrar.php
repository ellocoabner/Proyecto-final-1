<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Borrar cita</title>
</head>
<body>
	<h1>Borrar Cita</h1>
	<hr>

	<p><a href="bdreservacion.php">reservaciones</a>&raquo; Eliminar:</p>
	<?php 
	if (isset($_GET["id"])) {
		$id=$_GET["id"];

		require ("conexion.php");

		$eliminar=mysqli_query($conexion,"DELETE FROM reservaciones WHERE id='$id'");

		echo"<h3>reservacion eliminada con exito</h3>";

		}
	 ?>
</body>
</html>