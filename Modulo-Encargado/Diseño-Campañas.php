<html>

<head>
    <link rel="stylesheet" href="Style-encargado.css">
    <title>Diseño de Campañas</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>

<main>
    <div class="header">
        Diseño de Campañas
    </div>
    <ul class="nav-encargado">
        <li>
            <a href="\Promociones\Modulo-Encargado\Solicitudes-Campañas.php">Solicitudes</a>
        </li>
        <li class="active">
            <a href="\Promociones\Modulo-Encargado\Diseño-Campañas.php">Diseño de campañas</a>
        </li>
        <li>
            <a href="\Promociones\Modulo-Encargado\Campañas-Aprobadas.php">Campañas aprobadas</a>
        </li>
    </ul>

    <?php
    ?>

    <div class="container-diseño">
        <form action="datosCamp.php" method="post">
         
        <div class="container-diseño-datos">
            <label class="labelSol" for="">Solicitud:</label>
            <br>
            <select name="options" id="options">
            </select>
            <br><br>
            <label class="label" for="">Nombre de Campaña:</label>
            <label class="label" for="">Productos participantes:</label>
            <br>
            <input class="input-diseño" type="text" name="name" id="name" placeholder="Nombre de campaña">
            <input class="input-diseño" type="text" name="product" id="product" placeholder="Productos participantes">
            <br><br>
            <label class="label-detalles" for="">Detalles de promocion:</label>
            <br>
            <textarea name="details" id="details" cols="50" rows="10"></textarea>
            <br><br>
            <input class="input-diseño-enviar" type="submit" value="Enviar Diseño">
        </div>
        </form>
        <script src="solicitudestabla-encargadoO.js"></script>
    </div>
</main>

</html>