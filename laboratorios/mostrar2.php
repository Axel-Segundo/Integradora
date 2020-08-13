<?php
    include ("../BD/bd.php");
    $horario = "SELECT * FROM horarios";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="mostrar.css">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/interfaz_alumno.css">
</head>

<body>
    <header>
        <div class="contenedor">
            <div>
                <img src="../imagenes/logo.jpg" alt="">
            </div>
            <div>
                <a href="../views/inicioadministrador.view.php">Inicio</a>
            </div>
        </div>
    </header>
    <div class="container_table">
        <div class="table_title">Datos laboratorios</div>
        <div class="modificar">Modificar</div>
        <div class="table_header">laboratorio</div>
        <div class="table_header">profesor</div>
        <div class="table_header">materia</div>
        <div class="table_header">carrera</div>
        <div class="table_header">cuatrimestre</div>
        <div class="table_header">grupo</div>
        <div class="table_header">Entrada</div>
        <div class="table_header">Salida</div>

        <?php $horario = mysqli_query($conexion, $horario);
        while($row=mysqli_fetch_assoc($horario)) { ?>

        <div class="item"><?php echo $row["laboratorio"]?></div>
        <div class="item"><?php echo $row["profesor"]?></div>
        <div class="item"><?php echo $row["materia"]?></div>
        <div class="item"><?php echo $row["carrera"]?></div>
        <div class="item"><?php echo $row["cuatrimestre"]?></div>
        <div class="item"><?php echo $row["grupo"]?></div>
        <div class="item"><?php echo $row["h_entrada"]?></div>
        <div class="item"><?php echo $row["h_salida"]?></div>
        <?php }?>

    </div>
    <footer>
        <?php require '../views/footer.php';?>
    </footer>
    
</body>
</html>
