<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/inadmin.css">
    <link rel="stylesheet" href="../css/general.css">

    <title>Inicio</title>
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
        <div class="contenedor">
            <ul class="opciones">
                <li><a href="">Horario Semanal</a> </li>
                <li><a href="usuarios.view.php">Usuarios</a></li>
            </ul>
            <div class="imagenes">
                <img src="../imagenes/logo.jpg" alt="">
            </div>
        </div>
    </section>




    <?php
    require 'footer.php';
    ?>
</body>

</html>