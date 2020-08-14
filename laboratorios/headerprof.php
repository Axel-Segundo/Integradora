<header>
        <div class="contenedor">
            <div class="logo">
                <img src="../imagenes/logo2.jpg" alt="">
            </div>
            
            <div class="menu">
                <ul class="menup">
                    <li><a href="">Mi Horario</a></li>
                    <li>
                        <div>
                            <a href=""  class="perfil">
                                <?php echo '<strong>' . $_SESSION['usuario'] . '</strong>' ?>
                                <div><img src="../avatar/defect.jpg" alt=""></div>
                            </a>
                        </div>
                        <ul class="subm">
                            <li><a href="../views/inicioadministrador.view.php">Configuracion</a></li>
                            <li><a href="../views/cerrar-sesion.php">Cerrar Sesion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </header>