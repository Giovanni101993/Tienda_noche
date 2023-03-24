<?php

require_once'php/conexion.php';

$consulta = "SELECT ID_PRODUCTO, NOMBRE_PROD, PRECIO_PROD FROM productos WHERE CANTIDAD>=1";

$resultado = mysqli_query($conexion, $consulta);

$registros = mysqli_num_rows($resultado);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tienda Tecnologica</title>
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body>
		<!--Barra de navegacion-->
	<header>
		<div class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a href="#" class="navbar-brand"><strong>Tienda Online</strong> </a>
		        	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                		 <span class="navbar-toggler-icon"></span>
               		</button>
                		<div class="collapse navbar-collapse" id="navbarHeader">
                		    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    	    	<li class="nav-item">
                        		   <a href="./php/catalogo.php" class="nav-link active">Catalogo</a>
                        		</li>
                        		<li class="nav-item">
                            	<a href="#" class="nav-link">Contacto</a>
                        		</li>
                    			</ul>
                    			<a href="" class="btn btn-primary">Carrito</a>
                		</div>
			</div>
		</div>
	</header>

		<main>
			<br>
			<div class="container">
				<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

				<?php
					foreach ($resultado as $row) {
							# code...
							
				?>
					<div class="col">
						<div class="card shadow-sm">
								<img src="img/1.jpg" class="d-block w-100">
							<div class="card body">
								<h5 class="card-tittle">Computador</h5>
								<p class="card-text">Marca HP</p>
							<div class="d-flex justify-content-between aling-items-center">
								<div class="btn-group">
									<a href="#" class="btn btn-primary">Detalles</a>
								</div>
									<a href="#" class="btn btn-success">Comprar</a>
							</div>
							</div>
						</div>
					</div>
					<?php
				   		}
				   	?>
				</div>
			</div>
		</main>

		<!-- Option 1: Bootstrap Bundle with Popper -->
   		 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>