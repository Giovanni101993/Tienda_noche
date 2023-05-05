<?php
require_once 'conexion.php';
require_once 'config.php';

$id=isset($_GET['ID_PRODUCTO']) ? $_GET['ID_PRODUCTO']:'';
$token= isset($_GET['token']) ? $_GET['token']:'';
if ($id== '' && $token==''){
    echo 'error al procesar la peticion';
    exit;
}else{
    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);

    if($token==$token_tmp){
        $consulta = "SELECT count(ID_PRODUCTO) FROM productos WHERE ID_PRODUCTO='$id' AND CANTIDAD>0";

        $resultado = mysqli_query($conexion, $consulta);
        
        $registros = mysqli_num_rows($resultado);
    


if ($registros>0){
    $consulta = "SELECT NOMBRE_PROD, DESCRIP_PROD, PRECIO_PROD, DESC_PROD FROM productos 
    WHERE ID_PRODUCTO='$id' AND CANTIDAD=1 LIMIT 1";

    $resultado = mysqli_query($conexion, $consulta);
    $registros = mysqli_num_rows($resultado);

    foreach ($resultado as $row){
        $nombre = $row['NOMBRE_PROD'];
        $descripcion = $row['DESCRIP_PROD'];
        $precio = $row['PRECIO_PROD'];
        $descuento = $row['DESC_PROD'];
        $precio_descu = $precio - (($precio*$descuento)/100);
        $dir_imagenes = '../img/'. $id.'/';
        $rutaImg = $dir_imagenes . 'principal.jpg';
    
    if (!file_exists($rutaImg)){
        $rutaImg = '../img/no/nodisponible.png';
    }

        $imagenes = array();
        if (file_exists($dir_imagenes)){
            $directorio = dir($dir_imagenes);
                while (($archivo = $directorio->read())!=false) {
                            if ($archivo != 'principal.jpg' && strpos($archivo, 'jpg') || strpos($archivo, 'jpeg') || strpos($archivo, 'png')){
                                $imagenes[] = $dir_imagenes . $archivo; 
                            }
                }

                $directorio->close();
        }
    }
    
}else{
    echo 'Error al procesar la peticion';
    exit;
}
    }}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cssDetalles.css">
</head>

<body>

<header>
        <figure class="logo">
            <img src="../img/logo.png" alt="" class="imagen">
            <div class="marca">Tienda Online</div>
        </figure>
</header>

    <!--Contenido-->
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-1">
                    <div id="carouselImages" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $rutaImg; ?>" class="d-block w-100">

                            </div>
                            <?php foreach ($imagenes as $img) { ?>

                            
                            <div class="carousel-item">
                            <img src="<?php echo $img; ?>" class="d-block w-100">

                            </div>
                    <?php } ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselImages" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselImages" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                    </div>
                </div>
                <div class="col-md-6 order-md-2">
                <h2><?php echo $nombre; ?></h2>      
                 <?php if ($descuento>0){  ?>  

                <p><del>$<?php echo $precio; ?></del></p>
               <h2>$<?php  echo number_format ($precio_descu,2,',','.') ?>

                    
                <small class="text-success"><?php echo $descuento; ?>% descuento</small>         
                </h2>
                <?php } else{ ?>

                <h2>$<?php echo number_format($precio,2,',','.'); ?></h2>  

                    <?php } ?>


                <p class="lead"><?php echo $descripcion; ?>
                </p>
                <div class="d-grid gap-3 col-10 mx-auto">
                        <button class="btn btn-primary" type="button">Comprar ahora</button>
                </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>