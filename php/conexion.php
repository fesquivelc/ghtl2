<?php
/*Conectar a la bd*/
 $servidor = "localhost";
 $usuario = "root";
 $clave = "mysql";
 $db="db_gerens";

  $conexion = mysql_connect($servidor,$usuario,$clave) or die ("No se puede establecer conexion");
$select_db = mysql_select_db($db,$conexion) or die("La base de datos no existe");
 

?>