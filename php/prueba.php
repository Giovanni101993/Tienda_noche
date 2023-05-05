<?php 
require_once 'conexion_local.php';

$consulta= "SELECT `nombres` FROM `usuarios`";

$resultado = mysqli_query($conexion, $consulta);

$registros = mysqli_num_rows($resultado);  

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../css/estilo.css" rel="stylesheet" />
    <link href="../css/main.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../img/logo.png">
    <title>Tienda Tecnologica</title>
    <!-- Bootstrap CSS -->
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
            <li class="elements"><a href="../php/catalogo.php">Catálogo</a></li>
            <li class="elements"><a href="../php/formulario.php">Registro</a></li>
            <li class="elements"><a href="../php/formUsuario.php">Formulario</a></li>
          </ul>
        </div>
      </div>
    </header>

    <main>
      <div class="titulo">Bienvenido <?php echo '$User'; ?></div>
      <figure class="image">
        <img src="../img/tienda.jpg" class="banner" alt="" />
      </figure>
      <div class="parrafo">
        Prueba de usuarios
      </div>
      <div class="expansion">Nos encontramos en expansión</div>
      <figure class="image">
        <img src="../img/progreso.png" class="progreso" alt="" />
      </figure>
    </main>
  </body>
</html>