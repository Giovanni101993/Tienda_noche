<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cssForm.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="shortcut icon" href="../img/logo.png">
    <title>Login</title>
</head>
<body>
<main class="form"> 
    <h1>Login</h1>
    <form action="loginIngreso.php" method="post" id="formulario">
        <div class="form_container">
            
            <div class="form_group">
                <input type="text" name="user" class="form_input" placeholder=" " required>
                <label for="precio" class="form_label">Nombre de usuario</label>
                <span class="form_line"></span>
            </div>

            <div class="form_group">
                <input type="password" name="password" class="form_input" placeholder=" " required>
                <label for="categoria" class="form_label">Contraseña</label>
                <span class="form_line"></span>
            </div>
            <input type="submit" class="form_submit" value="Ingresar">
            <input type="submit" class="form_submit" onclick="location.href = '../index.html' " value="Volver a página principal">
        </div>    

    </form>
    
</script>
</main>
</body>
</html>