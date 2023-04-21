<?php
include_once 'conexion_local.php';

$Id = $_REQUEST['ID_PRODUCTO'];
$Nombre = $_REQUEST['NOMBRE_PROD'];
$Descripcion = $_REQUEST['DESCRIPCION_PROD'];
$Precio = $_REQUEST['PRECIO_PROD'];
$Categoria = $_REQUEST['CATEGORIA_PROD'];
$Descuento = $_REQUEST['DESC_PROD'];
$Cantidad = $_REQUEST['CANTIDAD'];

$insertarP = "INSERT INTO `productos`(`ID_PRODUCTO`, `NOMBRE_PROD`, `DESCRIP_PROD`, `PRECIO_PROD`, `CATEGORIA_PROD`, `DESC_PROD`, `CANTIDAD`)
 VALUES ('$Id','$Nombre','$Descripcion','$Precio','$Categoria','$Descuento','$Cantidad')";


$verificar_producto = mysqli_query($conexion, "SELECT * FROM `productos` WHERE ID_PRODUCTO='$Id'");

if(mysqli_num_rows($verificar_producto)>0){
    //$resultado = mysqli_query($conexion, $insertarP);
    echo '<script> alert("El id ingresado ya esta asociado a otro producto"); window.history.go(-1); </script>';
    exit();
}

else {
    $resultado = mysqli_query($conexion, $insertarP);
    echo '<script> alert("Producto registrado"); window.history.go(-1); </script>';
    exit();
}
    
//mysqli_close($conexion);
?>