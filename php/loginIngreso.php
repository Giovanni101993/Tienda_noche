<?php

include_once 'conexion.php';

$User = $_REQUEST['user'];
$Password = $_REQUEST['password'];


$verificar_usuario = mysqli_query($conexion, "SELECT * FROM `usuarios` WHERE user='$User' and password='$Password'");

if(mysqli_num_rows($verificar_usuario)<1){
    echo '<script> alert("El usuario no existe o la contraseña es incorrecta. Intente de nuevo"); window.history.go(-1); </script>';	
	
	exit();	
}

else{
    echo '<script> alert("Bienvenido"); window.location.href="prueba.php";</script>';	
    
}
?>