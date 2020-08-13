<?php session_start();?>
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
            <form action="ingresadatos.php" method="$_POST">
                <select name="laboratario" id="" required>
                    <option value="NULL">--Seleccione un laboratorio</option>
                    <option value=1>Redes I</option>
                    <option value=2>Redes II</option>
                    <option value=3>Oracle</option>
                    <option value=4>Internet de las cosas</option>
                    <option value=5>Multimedia</option>
                    <option value=6>Desarrollo</option>
                </select>
                <div class="f1">
                    <input type="text" name="profesor" class="profesor" placeholder="Nombre del profesor" required>
                </div>
                <select name="materia" id="" required>
                    <option value="NULL">--Materia</option>
                    <option value=1>Aplicaciones Web</option>
                    <option value=2>Sistemas Operativos</option>
                    <option value=3>Base de datos para aplicaciones</option>
                    <option value=4>Integradora</option>
                </select>
                <div class="f1">
                    <input type="text" name="carrera" class="carrera" placeholder="Nombre de la carrera" required>
                </div>
                <select name="cuatrimestre" id="" required>
                    <option value="NULL">--Cuatrimestre</option>
                    <option value=1>Primer cuatrimestre</option>
                    <option value=2>Segundo cuatrimestre</option>
                    <option value=3>Terce cuatrimestre</option>
                    <option value=4>Cuartocuatrimestre</option>
                    <option value=5>Quinto cuatrimestre</option>
                    <option value=6>Sextocuatrimestre</option>
                    <option value=7>Séptimocuatrimestre</option>
                    <option value=8>Octavo cuatrimestre</option>
                    <option value=9>Noveno cuatrimestre</option>
                    <option value=10>Décimo cuatrimestre</option>
                </select>
                <div class="f1">
                    <input type="text" name="grupo" class="grupo" placeholder="Grupo" required>
                </div>
                <div class="f1">
                    <input type="text" name="fecha" class="fecha" placeholder="Fecha" required>
                </div>
                <div class="f1">
                    <input type="text" name="entrada" class="entrada" placeholder="Hora de entrada" required>
                </div>
                <div class="f1">
                    <input type="text" name="salida" class="salida" placeholder="Hora de salida" required>
                </div>
                <div class="f1">
                    <input type="number" name="total" class="total" placeholder="Total de horas" required>
                </div>
                <div class="f1">
                    <input type="text" name="equipo" class="equipo" placeholder="Equipo utilizado" required>
                </div>
                <div class="f1">
                    <input type="text" name="observaciones" class="observaciones" placeholder="Observaciones" required>
                </div>
                <div class="f1">
                    <input type="text" name="firma" class="firma" placeholder="Firma" required>
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
