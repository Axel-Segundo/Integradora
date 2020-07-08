<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/interfaz_alumno.css">
    <title>Contenido</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <div class="logo">
                <img src="imagenes/logo.jpg" alt="">
            </div>
            <div class="logo2">
                <img src="imagenes/Tlax.png" alt="">
            </div>
        </div>
    </header>
    <div class="contenedor">
        <div class="registro">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="POST" class="horario" name="login">
                <div class="forma2">
                    <input type="text" name="materia" class="materia" placeholder="Ingresa la materia">
                </div>
                <div class="forma2">
                    <input type="text" name="laboratorio" class="laboratorio" placeholder="Ingresa el laboratorio">
                </div>
                <div class="forma2">
                    <input type="text" name="profesor" class="profesor" placeholder="Ingresa el nombre del profesor">
                </div>
                <div class="forma2">
                    <button type="submit">Consultar</button>
                </div>
            </form>
        </div>
    </div>
    <?php require 'footer.php'; ?>
</body>
</html>