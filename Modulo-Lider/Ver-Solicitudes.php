<html>

<head>
    <link rel="stylesheet" href="Style-lider.css">
    <title>Solicitudes</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>

<main>

    <div class="header">
        Gestion de campañas
    </div>

    <ul class="nav-encargado">
        <li>
            <a href="Solicitar-Campañas.php">Campañas y Solicitudes</a>
        </li>
        <li>
            <a href="Gestion-Campañas.php">Gestion de Campañas</a>
        </li>
        <li class="active">
            <a href="Ver-Solicitudes.php">Solicitudes Pendientes</a>
        </li>
    </ul>

    <div class="container-solicitudes">
        <div class="container-solicitudes-table">

            <table>
                <thead>
                    <tr>
                        <th>Informacion</th>
                        <th class="Fecha">Fecha</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody id="prueba">
                </tbody>
            </table>
        </div>
    </div>
    <script src="solicitudestabla-lider.js"></script>

</main>

</html>