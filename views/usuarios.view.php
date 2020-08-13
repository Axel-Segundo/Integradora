<?php
require '../BD/bd.php';
$usuarios ='SELECT * FROM usuarios';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/vista_usuarios.css">
    <title>Usuario</title>
</head>

<body>

    <header>
        <div class="contenedor">
            <div class="logo">
                <img src="../imagenes/logo2.jpg" alt="">
                <a href="inicioadministrador.view.php">Atras</a>
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
            <div class="titulo">USUARIOS</div>
            <div class="encabezado">
                <div class="header"><h3>Matricula</h3></div>
                <div class="header"><h3>Nombre</h3></div>
                <div class="header"><h3>Apellido Paterno</h3></div>
                <div class="header"><h3>Apellido Materno</h3></div>
                <div class="header"><h3>Usuario</h3></div>
            </div>
            <?php $resultado = mysqli_query($conexion, $usuarios);
            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                <div class="datos">
                    <div class="dato"><?php echo $row["matricula"]; ?></div>
                    <div class="dato"><?php echo $row["nombre"]; ?></div>
                    <div class="dato"><?php echo $row["ap_mat"]; ?></div>
                    <div class="dato"><?php echo $row["ap_mat"]; ?></div>
                    <div class="dato"><?php echo $row["usuario"]; ?></div>
                </div>
            <?php } ?>

        </div>




        <a href="registro_usuario.php" class="crear_usuario">Crear Usuario</a>



    </section>

    <?php
    require 'footer.php';
    ?>



</body>

</html>