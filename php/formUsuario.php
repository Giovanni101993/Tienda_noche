<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cssForm.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="shortcut icon" href="../img/logo.png">
    <title>Registro de usuarios</title>
</head>
<body>
<main class="form"> 
    <h1>Registro de usuarios</h1>
    <form action="registroUsuario.php" method="post" id="formulario">
        <div class="form_container">

            <div class="form_group">
                <input type="text" name="nombres" class="form_input" placeholder=" " required>
                <label class="form_label">Nombre</label>
                <span class="form_line"></span>
            </div>

            <div class="form_group">
                <input type="text" name="email" class="form_input" placeholder=" " required>
                <label class="form_label">Email</label>
                <span class="form_line"></span>
            </div>
            
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

            <div class="form_group">
                <input type="password" name="password2" class="form_input" placeholder=" " required>
                <label for="categoria" class="form_label">Repita su contraseña</label>
                <span class="form_line"></span>
            </div>

            <div class="form_group">
               <select class="form_input" name="rol">
                    <option>Seleccione una opción</option>
                    <option name="admin">Administrador</option>
                    <option name="empleado">Empleado</option>
                    <option name="cliente">Cliente</option>
               </select>
            </div>
            <input type="submit" class="form_submit" value="Registrarse">
            <input type="submit" class="form_submit" onclick="location.href = '../index.html' " value="Volver a página principal">
        </div>    

    </form>
    
</script>
</main>
</body>
</html>