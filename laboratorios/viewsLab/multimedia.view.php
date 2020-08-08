<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio de Multimedia</title>
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/inicio_profesor.css">
</head>
<body>
    <header>
        <?php require "headerprof.php" ?>
    </header>
    <div class="contenedorPro">
        <div class="form1">
            <form action="">
                <div class="f1">
                    <input type="text" name="Nombre" class="nombre" placeholder="Nombre del laboratorio">
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
                    <input type="text" name="cuatrimestre" class="cuatrimestre" placeholder="Cuatrimestre">
                </div>
                <div class="f1">
                    <input type="number" name="year" class="year" placeholder="Año">
                </div>
                <div class="f1">
                    <input type="number" name="grado" class="grado" placeholder="Grado">
                </div>
                <div class="f1">
                    <input type="text" name="grupo" class="grupo" placeholder="Grupo">
                </div>
                <div class="f1">
                    <input type="date" name="fecha" class="fecha" placeholder="Fecha">
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
        <div class="form2">
            <form action="">
                <div class="f2">
                    <input type="text" name="materia" class="materia" placeholder="Materia">
                </div>
                <div class="f2">
                    <input type="text" name="dia" class="dia" placeholder="Dia">
                </div>
                <div class="f2">
                    <input type="number" name="horainicio" class="horainicio" placeholder="Hora de Inicio">
                </div>
                <div class="f2">
                    <input type="number" name="horafin" class="horafin" placeholder="Hora de Fin">
                </div>
                <div class="f2">
                    <input type="text" name="grupo" class="grupo" placeholder="Grupo">
                </div>
                <div class="f2">
                    <button type="submit">Enviar horario</button>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <?php require "../views/footer.php" ?>
    </footer>
</body>
</html>