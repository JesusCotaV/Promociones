<html>

<head>
    <link rel="stylesheet" href="Style-encargado.css">
    <title>Solicitudes</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>

<main>

    <div class="header">
        Solicitudes
    </div>
    
    <ul class="nav-encargado">
        <li class="active">
            <a href="\Promociones\Modulo-Encargado\Solicitudes-Campañas.php">Solicitudes</a>
        </li>
        <li>
            <a href="\Promociones\Modulo-Encargado\Diseño-Campañas.php">Diseño de campañas</a>
        </li>
        <li>
            <a href="\Promociones\Modulo-Encargado\Campañas-Aprobadas.php">Campañas aprobadas</a>
        </li>
    </ul>

    <div class="container-solicitudes">
        <div class="container-solicitudes-table">
        <form action="Diseño-Campañas.php" method="post">
            <table>
                <thead>
                    <tr>
                        <th>Informacion</th>
                        <th class="fecha">Fecha</th>
                        <th>Observacion</th>
                    </tr>
                </thead>
                <tbody id="prueba">
                </tbody>
            </table>
            </form>
        </div>
    </div>
    <script src="solicitudestabla-encargado.js"></script>
</main>

</html>