<html>

<head>
    <link rel="stylesheet" href="Style-encargado.css">
    <title>Reporte de Campaña</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="print.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.min.css">
</head>

<body>
    <main>
        <div class="header">
            Reporte de Campaña
        </div>
        <div class="container-reporte">
            <div class="chart" id="chart">
                <h1>Datos de las Ventas</h1>
                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                <input onclick="printJS('myChart', 'html')" type="button" value="Guardar">
            </div>

            <script>
            var xValues = ["Enero", "Febrero", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre","Octubre", "Noviembre", "Diciembre"];
            var yValues = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

            new Chart("myChart", {
                type: "line",
                data: {
                    labels: xValues,
                    datasets: [{
                        fill: false,
                        lineTension: 0,
                        backgroundColor: "rgba(0,0,255,1.0)",
                        borderColor: "rgba(0,0,255,0.1)",
                        data: yValues
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                min: 6,
                                max: 16
                            }
                        }],
                    }
                }
            });
            </script>
        </div>
    </main>
</body>

</html>