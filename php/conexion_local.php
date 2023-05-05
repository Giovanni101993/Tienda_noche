<?php
$HOSTNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$NAME = "tienda_noche";

$conexion = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $NAME);

if(!$conexion){

	echo 'Error al conectar';
}
?>



