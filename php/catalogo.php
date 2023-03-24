<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/estiloCatalogo.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Catálogo</title>
</head>
<body>
    <!--Barra de navegacion-->
	<header>
		<div class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a href="../Tienda.php" class="navbar-brand"><strong>Tienda Online</strong> </a>
		        	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                		 <span class="navbar-toggler-icon"></span>
               		</button>
                		<div class="collapse navbar-collapse" id="navbarHeader">
                		    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    	    	<li class="nav-item">
                        		   <a href="#" class="nav-link active">Catalogo</a>
                        		</li>
                        		<li class="nav-item">
                            	<a href="#" class="nav-link">Contacto</a>
                        		</li>
                    		</ul>
                		</div>
			</div>
		</div>
	</header>

    <main>
        <div class="header-container">
            <h1>Catálogo</h1>
        <div class="container-icon">
            <div class="container-cart-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-cart">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-close hidden">
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
            <div class="item">
                <figure>
                    <img src="https://images.unsplash.com/photo-1606144042614-b2417e99c4e3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHM1fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60">
                </figure>
                <div class="info-producto">
                    <h2>Play Station 5</h2>
                    <p class="price">$3500000</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>

            <div class="item">
                <figure>
                    <img src="https://images.unsplash.com/photo-1604586376807-f73185cf5867?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8eGJveHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60">
                </figure>
                <div class="info-producto">
                    <h2>XBox Serie s</h2>
                    <p class="price">$2500000</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>

            <div class="item">
                <figure>
                    <img src="https://images.unsplash.com/photo-1577979749830-f1d742b96791?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8c21hcnQlMjB0dnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60">
                </figure>
                <div class="info-producto">
                    <h2>Smart Tv 50"</h2>
                    <p class="price">$2500000</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>

            <div class="item">
                <figure>
                    <img src="https://images.unsplash.com/photo-1551739440-5dd934d3a94a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8Y29tcHV0YWRvcmVzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60">
                </figure>
                <div class="info-producto">
                    <h2>PC</h2>
                    <p class="price">$2200000</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>

            <div class="item">
                <figure>
                    <img src="https://images.unsplash.com/photo-1626218174358-7769486c4b79?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z2FtaW5nJTIwcGN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                </figure>
                <div class="info-producto">
                    <h2>PC Gaming</h2>
                    <p class="price">$4200000</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>

            <div class="item">
                <figure>
                    <img src="https://images.unsplash.com/photo-1525547719571-a2d4ac8945e2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGNvbXB1dGFkb3Jlc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60">
                </figure>
                <div class="info-producto">
                    <h2>Portatil</h2>
                    <p class="price">$3000000</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>

            <div class="item">
                <figure>
                    <img src="https://images.unsplash.com/photo-1508685096489-7aacd43bd3b1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c21hcnQlMjB3YXRjaHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60">
                </figure>
                <div class="info-producto">
                    <h2>SmartWatch</h2>
                    <p class="price">$1200000</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>

            <div class="item">
                <figure>
                    <img src="https://images.unsplash.com/photo-1585790054762-36743f4b07ff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fHRhYmxldHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60">
                </figure>
                <div class="info-producto">
                    <h2>Tablet</h2>
                    <p class="price">$2500000</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>

            <div class="item">
                <figure>
                    <img src="https://images.unsplash.com/photo-1598327105666-5b89351aff97?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c21hcnRwaG9uZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60">
                </figure>
                <div class="info-producto">
                    <h2>SmartPhone</h2>
                    <p class="price">$1500000</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
        </div>

    </main>

    <script src="../js/catalogo.js"></script>
</body>
</html>