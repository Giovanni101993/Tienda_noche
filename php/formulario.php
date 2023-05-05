<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cssForm.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="shortcut icon" href="../img/logo.png">
    <title>Registro de productos</title>
</head>
<body>
<main class="form"> 
<h1>Registro de productos</h1>
    <form action="registroProd.php" method="post">
        <div class="form_container">

            <div class="form_group">
                <input type="text" name="ID_PRODUCTO" class="form_input" placeholder=" " required>
                <label class="form_label">Id Producto</label>
                <span class="form_line"></span>
            </div>

            <div class="form_group">
                <input type="text" name="NOMBRE_PROD" class="form_input" placeholder=" " required>
                <label class="form_label">Nombre del Producto</label>
                <span class="form_line"></span>
            </div>
            <br>
            <div class="form_group">
                <textarea rows="10" cols="50" name="DESCRIPCION_PROD" class="form_text" placeholder=" " required></textarea>
                <label for="descripcion" class="form_label">Descripción del Producto</label>
                <span class="form_line"></span>
            </div>

            <div class="form_group">
                <input type="text" name="PRECIO_PROD" class="form_input" placeholder=" " required>
                <label for="precio" class="form_label">Precio del Producto</label>
                <span class="form_line"></span>
            </div>

            <div class="form_group">
                <input type="text" name="CATEGORIA_PROD" class="form_input" placeholder=" " required>
                <label for="categoria" class="form_label">Categoria</label>
                <span class="form_line"></span>
            </div>

            <div class="form_group">
                <input type="text" name="DESC_PROD" class="form_input" placeholder=" " required>
                <label for="descuento" class="form_label">Descuento</label>
                <span class="form_line"></span>
            </div>

            <div class="form_group">
                <input type="text" name="CANTIDAD" class="form_input" placeholder=" " required>
                <label for="cantidad" class="form_label">Cantidad</label>
                <span class="form_line"></span>
            </div>
            <input type="submit" class="form_submit" value="Guardar Producto">
            <input type="submit" class="form_submit" onclick="location.href = '../index.html' " value="Volver a página principal">
        </div>    

    </form>
</main>
</body>
</html>