<?php 
$servidor="localhost";
$usuario="root";
$password="";
$base="consultorio";



$conexion=mysqli_connect("$servidor","$usuario","$password") or die(mysql_error());
$base=mysqli_select_db($conexion, $base)or die(mysql_error());
 ?>