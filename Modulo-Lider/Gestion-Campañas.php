<html>

<head>
    <link rel="stylesheet" href="Style-lider.css">
    <title>Gestion de Campañas</title>
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
        <li class="active">
            <a href="Gestion-Campañas.php">Gestion de Campañas</a>
        </li>
        <li>
            <a href="Ver-Solicitudes.php">Solicitudes Pendientes</a>
        </li>
    </ul>

    <div class="container-diseño">
        <form action="updatecamp.php" method="post">

            <div>
                <div class="container-diseño-datos-form">
                    <label class="labelSol" for="">Campañas:</label>
                    <br>
                    <select name="options" id="options">
                    </select>
                    <br><br>
                </div>
                <div class="container-diseño-datos">
                    <fieldset class="container-fecha">
                        <div>
                            <div>
                                <div class="header-fecha">
                                    Seleccione Fecha
                                </div>
                                <h1 class="fecha-datos">
                                    <label class="label-de">De:</label>
                                    <input class="inputcssadd" type="date" id="fechai" name="fechai"
                                        placeholder="Nombre">
                                    <label class="label-a">a:</label>
                                    <input class="inputcssadd" type="date" id="fechaf" name="fechaf"
                                        placeholder="Precio">
                                </h1>
                            </div>
                        </div>
                        <section name="idcamp" id="idcamp"></section>
                        <input class="input-fecha-guardar" type="submit" value="Autorizar">
                    </fieldset>
                    <fieldset class="container-fecha">
                        <div>
                            <div>
                                <div class="header-fecha">
                                    Observaciones
                                </div>
                                <h1 class="fecha-datos">
                                    <label class="label-observacion">Escriba la observacion:</label>
                                    <textarea class="textarea-observacion" name="observacion" id="observacion" cols="60" rows="5"></textarea>
                                </h1>
                            </div>
                        </div>
                        <input class="input-fecha-guardar" type="submit" value="Rechazar">
                    </fieldset>
                </div>
            </div>
        </form>
        <script src="campañaslista.js"></script>
    </div>
</main>

</html>