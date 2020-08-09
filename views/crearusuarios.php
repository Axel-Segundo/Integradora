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

            <form action="">
                <input type="text" placeholder="Matricula">
                <input type="text" placeholder="Nombre(s)">
                <input type="text" placeholder="Apellido Paterno">
                <input type="text" placeholder="Apellido Materno">
                <input type="text" placeholder="Materia">
                <select name="Tipo" id="">
                    <option value="">--seleccione tipo</option>
                    <option value="1">Profesor</option>
                    <option value="2">Administrador</option>
                </select>
                <input type="text" placeholder="Usuario">
                <input type="passwor" placeholder="Contraseña">
                <input type="password" placeholder="Confirmar Contraseña">

                <input type="submit" value="Guardar">

            </form>
        </div>
    </section>

    <?php
    require 'footer.php';
    ?>
</body>

</html>