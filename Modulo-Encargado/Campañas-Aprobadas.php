<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-encargado.css">
    <title>Campañas Aprobadas</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="html-table-search.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('table.search-table').tableSearch({
            searchText: 'Buscar:',
            searchPlaceHolder: 'Buscar'
        });
    });
    </script>
    <script src="show.js"></script>
</head>

<main>
    <div class="header">
        Campañas Aprobadas
    </div>
    <ul class="nav-encargado">
        <li>
            <a href="\Promociones\Modulo-Encargado\Solicitudes-Campañas.php">Solicitudes</a>
        </li>
        <li>
            <a href="\Promociones\Modulo-Encargado\Diseño-Campañas.php">Diseño de campañas</a>
        </li>
        <li class="active">
            <a href="\Promociones\Modulo-Encargado\Campañas-Aprobadas.php">Campañas aprobadas</a>
        </li>
    </ul>

    <div class="container-solicitudes">

        <div id="tabla-finalizadas" class="container-solicitudes-table">
            <table class="search-table">
                <thead>
                    <tr>
                        <th>Detalles de campaña</th>
                        <th class="fecha">Fecha</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody id="prueba">
                </tbody>

            </table>
        </div>
    </div>
    <script src="campañas.js"></script>
    <script>
    $(document).ready(function() {
        $('#tabla').DataTable();
    });
    </script>
</main>

</html>