<?php

$HOSTNAME = "sql106.epizy.com";
$USERNAME = "epiz_34005965";
$PASSWORD = "bRFnq2feXTzAAc";
$NAME = "epiz_34005965_tienda_noche";

$conexion = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $NAME);

if(!$conexion){

	echo 'No funciono pero ya casi';
}

?>