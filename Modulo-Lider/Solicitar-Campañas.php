<html>

<head>
    <link rel="stylesheet" href="Style-lider.css">
    <title>Solicitar campañas</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>

<main>

    <body>
        <script>
        function ShowFecha() {
            document.getElementById("AgregarFecha").classList.toggle("show");
        }

        function ShowObservacion() {
            document.getElementById("AgregarObservacion").classList.toggle("show");
        }
        </script>
 
        <!-- Menu de ingreso de fecha -->
        <div id="AgregarFecha" class="dropdown-content">
            <form action="updatecamp.php" method="post" enctype="multipart/form-data">
                <fieldset class="container-fecha">
                    <div>
                        <div>
                            <div class="header-fecha">
                                Seleccione Fecha
                            </div>
                            <h1 class="fecha-datos">
                                <label class="label-de">De:</label>
                                <input required="required" class="inputcssadd" type="date" id="fechai" name="fechai"
                                    placeholder="Nombre">
                                <label class="label-a">a:</label>
                                <input required="required" class="inputcssadd" type="date" id="fechaf" name="fechaf"
                                    placeholder="Precio">
                            </h1>
                        </div>
                    </div>
                    <section name="idcamp" id="idcamp"></section>
                    <input class="input-fecha-guardar" type="submit" value="Guardar">
                    <input onclick="ShowFecha()" class="input-fecha-volver" type="button" value="Volver">
                </fieldset>
            </form>
            
        </div>

        <!-- Menu de ingreso de observacion -->
        <div id="AgregarObservacion" class="dropdown-content">
            <form action="insertarproducto.php" method="post" enctype="multipart/form-data">
                <fieldset class="container-fecha">
                    <div>
                        <div>
                            <div class="header-fecha">
                                Observaciones
                            </div>
                            <h1 class="fecha-datos">
                                <label class="label-observacion">Escriba la observacion:</label>
                                <textarea class="textarea-observacion" name="" id="" cols="60" rows="5"></textarea>
                            </h1>
                        </div>
                    </div>
                    <input class="input-fecha-guardar" type="submit" value="Guardar">
                    <input onclick="ShowObservacion()" class="input-fecha-volver" type="button" value="Volver">
                </fieldset>
            </form>
        </div>

        <div class="header">
            Gestion de campañas
        </div>

        <ul class="nav-encargado">
            <li class="active">
                <a href="Solicitar-Campañas.php">Campañas y Solicitudes</a>
            </li>
            <li>
                <a href="Gestion-Campañas.php">Gestion de Campañas</a>
            </li>
            <li>
                <a href="Ver-Solicitudes.php">Solicitudes Pendientes</a>
            </li>
        </ul>

        <div class="container-campañas">
            <h1>
                Solicitar Campaña
            </h1>
            <label class="label-campañas" for="">Datos de la solicitud</label>
            <br><br>
            <form  id="formulario" action="solicitud.php" method="post">
                <textarea class="textarea-campañas" name="info" id="info" cols="50" rows="5"></textarea>
                <br><br>
                <input class="input-enviar" type="submit" value="Enviar Solicitud">
            </form>
            <div class="line">
            </div>
            <h1>
                Campañas
            </h1>
            

    <div class="container-solicitudes">
        <div class="container-solicitudes-table">
            
            <table>
                <thead>
                    <tr>
                        <th>Nombre de Campaña</th>
                        <th class="Fecha">Detalles</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody id="prueba">
                </tbody>
            </table>
        </div>
    </div>
    <script src="campañas-datos2.js"></script>
            </div>
            
        </div>
    </body>

</main>

</html>