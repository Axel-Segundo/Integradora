<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/newuser.css">

    <title>Nuevo Usuario</title>
</head>

<body>

    <header>
        <div class="contenedor">
            <div class="logo">
                <img src="../imagenes/logo2.jpg" alt="">
            </div>

            <div class="menu">
                <ul class="menup">
                    <li>
                        <div>
                            <a href="" class="perfil">
                                <p> Perfil</p>
                                <div><img src="../avatar/defect.jpg" alt=""></div>
                            </a>
                        </div>
                        <ul class="subm">
                            <li><a href="">Configuracion</a></li>
                            <li><a href="">Cerrar Sesion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>

    </header>

    <section class="main">
        <div class="titulo">
            <h2>Nuevo Usuario</h2>
        </div>
        <div class="contenedor-form">

            <form action="registro_usuario.php" method="POST" name="login">
                <input type="text" placeholder="Matricula" name="matricula">
                <input type="text" placeholder="Nombre(s)" name="nombre">
                <input type="text" placeholder="Apellido Paterno " name="appat">
                <input type="text" placeholder="Apellido Materno" name="apmat">

                <select name="tipo" id="">
                    <option value="NULL">--seleccione tipo</option>
                    <option value="profesor">Profesor</option>
                    <option value="administrador">Administrador</option>
                </select>
                <input type="text" placeholder="Usuario" name="usuario">
                <input type="password" placeholder="Contraseña" name="contraseña">
                <input type="password" placeholder="Confirmar Contraseña" name="confcont">
                
               
                <button type="submit"  onclick="login.submit()">Guardar</button>

            </form>
        </div>
    </section>

    <?php
    require 'footer.php';
    ?>
</body>

</html>