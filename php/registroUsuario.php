<?php


include_once 'conexion.php';


//Recibir los datos y almacenarlos en variables

$Nombres =  $_REQUEST['nombres'];
$Email = $_REQUEST['email'];
$User = $_REQUEST['user'];
$Password = $_REQUEST['password'];
$Password2 = $_REQUEST['password2'];
$Rol = $_REQUEST['rol'];

$insertarU = "INSERT INTO `usuarios`(`nombres`, `email`, `user`, `password`, `rol`) 
VALUES ('$Nombres','$Email','$User','$Password','$Rol')";

if(!$resultado) {
	echo "Error al registrase";
}

else{
	echo '<script> alert("Registrado correctamente"); </script>';
}

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM `usuarios` WHERE user='$User'");


if ($Password != $Password2) {
	echo '<script> alert("Las contraseñas no coinciden"); window.history.go(-1); </script>';	
	exit;
}


else if(mysqli_num_rows($verificar_usuario)>0){
	echo '<script> alert("El usuario ya esta registrado"); window.history.go(-1); </script>';	

	exit;
}

else {
	$resultado=mysqli_query($conexion, $insertarU);

	if (!$resultado) {
		echo 'Error al registrar';
	}

	else{
		echo '<script> alert("Usuario registrado"); window.history.go(-1); </script>';	
	}

}

mysqli_close($conexion);
?>