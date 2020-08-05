<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/general.css">
    
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <div class="logo">
                <img src="imagenes/logo.jpg" alt="">
            </div>
            <div class="logo2">
                <img src="imagenes/Tlax.png" alt="">
            </div>
        </div>
    </header>
    <div class="contenedor-form">
        <form action="login.php" method="POST" class="formulario" name="login">
            <div class="forma">
				<i class="icono izquierda fa fa-user"></i>  <input type="text" name="usuario" class="usuario" placeholder="Usuario">
            </div>
            <div class="forma">
				<i class="icono izquierda fa fa-lock"></i>  <input type="password" name="password" class="password_btn" placeholder="Contraseña">
				<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>
        </form>
        <div class="contenedor-inv">
        <div class="alumno">
            <p>Si usted no cuenta con un usuario, favor de ingresar aqui</p></br>
            <a href="contenido_alumno.php"class="uv">Usuario invitado</a>
        </div>
    </div>
    </div>
    <?php require 'views/footer.php'; ?>
</body>
</html>