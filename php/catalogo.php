<?php

require_once 'conexion.php';

$categoria = @$_REQUEST["opciones"];

$consulta = "SELECT ID_PRODUCTO, NOMBRE_PROD, CATEGORIA_PROD, PRECIO_PROD, DESCRIP_PROD FROM productos WHERE CANTIDAD>=1";

if (!empty($categoria)) {
    $consulta .= " AND CATEGORIA_PROD = '$categoria'";
  }

$resultado = mysqli_query($conexion, $consulta);

$registros = mysqli_num_rows($resultado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/estilo.css" rel="stylesheet" type="text/css">
    <link href="../css/estiloCatalogo.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../img/logo.png">
   <title>Catálogo</title>
</head>

<body>
    <!--Barra de navegacion-->
    <header>
        <div class="navbar">
            <figure class="image_logo">
                <img src="../img/logo.png" alt="" class="logo" />
                <div class="marca">Tienda Online</div>
            </figure>

            <div class="navbar_elements">
                <ul class="list">
                    <li class="elements"><a href="../index.html">Inicio</a></li>
                    <li class="elements"><a href="catalogo.php">Catálogo</a></li>
                    <li class="elements"><a href="formulario.php">Registro</a></li>
                </ul>
            </div>
            <div class="navbar_menu">
               
        <form action="catalogo.php" method="post">
          <select name="opciones"  class="navbar_opciones">
            <option selected value="" class="opcion">Seleccione una opción</option>
            <option value="Tecnologia" class="opcion">Tecnología</option>
            <option value="aseo" class="opcion">Aseo</option>
            <option value="moto" class="opcion">Motos</option>
            <option value="escolar" class="opcion">Escolar</option>
            <option value="hogar" class="opcion">Hogar</option>
            
          </select>
          <button class="navbar_btn">Buscar</button>
        </form>  
        </div>
        </div>
    </header>

    <main>
        <div class="header-container">
            <h1>Catálogo</h1>
            <div class="container-icon">
                <div class="container-cart-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="icon-cart">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                    <div class="count-products">
                        <span id="contador-productos">0</span>
                    </div>
                </div>
               
                <div class="container-cart-products hidden-cart">
                    <div class="row-product">
                        <div class="cart-product hidden">
                            <div class="info-cart-product">
                                <span class="cantidad-producto-carrito"></span>
                                <p class="titulo-producto-carrito"></p>
                                <span class="precio-producto-carrito"></span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="icon-close hidden">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                    </div>

                    <div class="cart-total hidden">
                        <h3>Total:</h3>
                        <span class="total-pagar"> </span>
                    </div>
                    <p class="cart-empty">El carrito está vacio</p>
                </div>
            </div>
        </div>

        <div class="container-items">

            <?php
            foreach ($resultado as $row) {

                ?>
                <div class="item">
                    <?php

                    $id = $row['ID_PRODUCTO'];
                    $imagen = "../img/" . $id . "/principal.jpg";
                    if (!file_exists($imagen)) {
                        $imagen = "../img/nodisponible.png";
                    }
                    ?>

                    <figure>
                        <img src="<?php echo $imagen ?>">
                    </figure>
                    <div class="info-producto">
                        <h2>
                            <?php echo $row['NOMBRE_PROD']; ?>
                        </h2>
                        <p class="price">$
                            <?php echo number_format($row['PRECIO_PROD'], 2, ',', '.'); ?>
                        </p>
                        <p class="details">
                            <?php echo $row['DESCRIP_PROD']; ?>
                        </p>
                        <button class="btn-add-cart"><a href="detalles.php" class="btn-detail">Detalles</a></button>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>

                </div>
                
                <?php
            }
            ?>
        </div>
    </main>

    <script src="../js/catalogo.js"></script>
</body>

</html>