<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/inicio_profesor.css">


    <title>Inicio</title>
</head>

<body>

    <header>
        <div class="contenedor">
            <div class="logo">
                <img src="imagenes/logo2.jpg" alt="">
            </div>
            
            <div class="menu">
                <ul class="menup">
                    <li><a href="">Mi Horario</a></li>
                    <li>
                        <div>
                            <a href=""  class="perfil">
                                <?php echo '<strong>' . $_SESSION['usuario'] . '</strong>' ?>
                                <div><img src="avatar/defect.jpg" alt=""></div>
                            </a>
                        </div>
                        <ul class="subm">
                            <li><a href="">Configuracion</a></li>
                            <li><a href="views/cerrar-sesion.php">Cerrar Sesion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </header>

    <section class="main">
        <section class="laboratorios">
            <div class="contenedor">

                <div class="contenedor-laboratorios">
                    <div class="lab">
                        <div class="thumb">
                            <a href="#"><img src="imagenes/lab/redes1.png" alt="HTML" /></a> </div>
                        <div class="descripcion">
                            <a href="" class="nombre">
                                Redes I
                            </a>
                        </div>
                    </div>

                    <div class="lab">
                        <div class="thumb">
                            <a href="#"><img src="imagenes/lab/redes2.jpg" alt="HTML" /></a> </div>
                        <div class="descripcion">
                            <a href="#" class="nombre">
                                Redes II
                            </a>
                        </div>
                    </div>
                    <div class="lab">
                        <div class="thumb">
                            <a href="#"><img src="imagenes/lab/oracle.jpg" alt="HTML" /></a> </div>
                        <div class="descripcion">
                            <a href="" class="nombre">
                                Oracle
                            </a>
                        </div>
                    </div>
                    <div class="lab">
                        <div class="thumb">
                            <a href="#"><img src="imagenes/lab/iot.jpg" alt="HTML" /></a> </div>
                        <div class="descripcion">
                            <a href="" class="nombre">
                                IOT
                            </a>
                        </div>
                    </div>
                    <div class="lab">
                        <div class="thumb">
                            <a href="#"><img src="imagenes/lab/multimedia1.jpg" alt="HTML" /></a> </div>
                        <div class="descripcion">
                            <a href="" class="nombre">
                                Multimedia
                            </a>

                        </div>
                    </div>
                    <div class="lab">
                        <div class="thumb">
                            <a href="#"><img src="imagenes/lab/multimedia2.jpg   " alt="HTML" /></a> </div>
                        <div class="descripcion">
                            <a href="" class="nombre">
                                Desarrollo
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </section>





    <footer>
        <?php require 'footer.php' ?>
    </footer>
</body>

</html>