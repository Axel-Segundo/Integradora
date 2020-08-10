<?php 
include ("../BD/bd.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio de Redes I</title>
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/laboratorios.css">
</head>
<body>
    <header>
        <?php require "headerprof.php" ?>
    </header>
    <div class="contenedorPro">
        <div class="form1">
            <form action="funciones/ingresadatos.php" method="$_POST">
                <div class="f1">
                    <input type="text" name="nombre" class="nombre" placeholder="Nombre del laboratorio">
                </div>
                <div class="f1">
                    <input type="text" name="profesor" class="profesor" placeholder="Nombre del profesor">
                </div>
                <div class="f1">
                    <input type="text" name="materia" class="materia" placeholder="Nombre de la materia">
                </div>
                <div class="f1">
                    <input type="text" name="carrera" class="carrera" placeholder="Nombre de la carrera">
                </div>
                <div class="f1">
                    <input type="number" name="cuatrimestre" class="cuatrimestre" placeholder="Cuatrimestre">
                </div>
                <div class="f1">
                    <input type="text" name="grupo" class="grupo" placeholder="Grupo">
                </div>
                <div class="f1">
                    <input type="text" name="fecha" class="fecha" placeholder="Fecha">
                </div>
                <div class="f1">
                    <input type="number" name="entrada" class="entrada" placeholder="Hora de entrada">
                </div>
                <div class="f1">
                    <input type="number" name="salida" class="salida" placeholder="Hora de salida">
                </div>
                <div class="f1">
                    <input type="number" name="total" class="total" placeholder="Total de horas">
                </div>
                <div class="f1">
                    <input type="text" name="equipo" class="equipo" placeholder="Equipo utilizado">
                </div>
                <div class="f1">
                    <input type="text" name="observaciones" class="observaciones" placeholder="Observaciones">
                </div>
                <div class="f1">
                    <input type="text" name="firma" class="firma" placeholder="Firma">
                </div>
                <div class="f1">
                    <button type="submit">Enviar registro</button>
                </div>
            </form>
        </div> 
        <br>
    </div>
    <footer>
        <?php require "../views/footer.php" ?>
    </footer>
</body>
</html>