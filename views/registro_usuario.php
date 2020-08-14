<?php
include '../BD/bd.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/general.css" />
    <link rel="stylesheet" href="../css/new_user.css" />

    <title>Nuevo Usuario</title>
</head>

<body>
    <header>
        <div class="contenedor">
            <div class="logo">
                <img src="../imagenes/logo2.jpg" alt="" />
                <a href="usuarios.view.php">Atras</a>
            </div>

            <div class="menu">
                <ul class="menup">
                    <li>
                        <div>
                            <a href="" class="perfil">
                                <p>Perfil</p>
                                <div><img src="../avatar/defect.jpg" alt="" /></div>
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
            <form action="" method="POST" name="login">
                <input type="text" placeholder="Matricula" name="matricula" required />
                <input type="text" placeholder="Nombre(s)" name="nombre" required />
                <input type="text" placeholder="Apellido Paterno " name="appat" required />
                <input type="text" placeholder="Apellido Materno" name="apmat" required />

                <select name="tipo" id="" required>
                    <option value="">--seleccione tipo</option>
                    <option value="profesor">Profesor</option>
                    <option value="administrador">Administrador</option>
                </select>
                <input type="text" placeholder="Usuario" name="usuario" required />
                <input type="password" placeholder="Contraseña" name="contraseña" required />
                <input type="password" placeholder="Confirmar Contraseña" name="confcont" required />
                <button type="submit" name="registrar">Guardar</button>
                <div class="contenedor_li">
                    <ul>
                        <?php
                        if (isset($_POST['registrar'])) {
                            $matricula = filter_var( $_POST["matricula"], FILTER_SANITIZE_STRING);
                            $nombre = filter_var( $_POST["nombre"], FILTER_SANITIZE_STRING);
                            $apellido1 = filter_var( $_POST["appat"], FILTER_SANITIZE_STRING);
                            $apellido2 = filter_var( $_POST["apmat"], FILTER_SANITIZE_STRING);
                            $tipo = filter_var( $_POST["tipo"], FILTER_SANITIZE_STRING);
<<<<<<< HEAD
                            $usuario = $_POST["usuario"];
=======
                            $usuario = filter_var( $_POST["usuario"], FILTER_SANITIZE_STRING);
>>>>>>> 15ae92d4bbe989951a1d92120741b58c5c31e69d
                            $contraseña = filter_var( md5($_POST["contraseña"]), FILTER_SANITIZE_STRING);
                            $confcont = filter_var( md5($_POST["confcont"]), FILTER_SANITIZE_STRING);
                            $avatar = 'default';

                            if (empty($matricula) || empty($nombre) || empty($apellido1) || empty($apellido2) || empty($tipo) || empty($usuario) || empty($contraseña) || empty($confcont)) {
                        ?> <li>Llena todos los campos</li>
                                <?php        } else {

                                $comprobaruser = mysqli_num_rows(mysqli_query($conexion, "SELECT usuario FROM usuarios WHERE usuario = '$usuario'"));
                                if ($comprobaruser >= 1) {
                                ?> <li>El usuario ya existe pruebe con otro usuario</li>
                                    <?php            } else {

                                    if ($contraseña != $confcont) {

                                    ?> <li> Las contraseñas no coinciden</li>

                        <?php                } else {

                                        $insertar = "INSERT INTO usuarios(`id`, `matricula`, `nombre`, `ap_pat`, `ap_mat`, `usuario`, `contraseña`, `avatar`, `tipo`) VALUES (NULL, '$matricula', '$nombre', '$apellido1', '$apellido2', '$usuario', '$contraseña', '$avatar', '$tipo');";
                                        $resultado = mysqli_query($conexion, $insertar);
                                        mysqli_close($conexion);
                        ?>
                                    <li class="registrado">Registrado</li>
                        <?php
                                    }
                                }
                            }
                        }
                        ?>
                    </ul>
                </div>
            </form>
        </div>
    </section>
    <?php
    require 'footer.php'


    ?>

</body>

</html>