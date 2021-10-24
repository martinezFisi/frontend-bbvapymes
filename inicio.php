<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Expires" content="0">

        <meta http-equiv="Last-Modified" content="0">

        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">

        <meta http-equiv="Pragma" content="no-cache">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="assests/main.css">
        <title>Portal Procesos | Heatmap</title>

        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 css-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link media="screen" rel="stylesheet" href="assests/plugins/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="assests/plugins/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="assests/plugins/bootstrap/css/ionicons.min.css">
        <!--estilos propios -->
        <link rel="stylesheet" href="assests/plugins/dist/css/styles_1.css"> <!-- cambio el color de navbar -->
        <!-- daterange picker -->

        <!-- Select2 -->
        <link rel="stylesheet" href="assests/plugins/select2/select2.min.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="assests/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="assests/plugins/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="assests/plugins/dist/css/skins/_all-skins.min.css">

        <link rel="icon" href="assests/images/icon.png">
        <link rel="shortcut icon" href="assests/images/icon.png">

        <!-- Marcador en escritorio de Iphone-->
        <link rel="apple-touch-icon" href="assests/images/icon.png">

        <!-- Include Required Prerequisites -->
        <script type="text/javascript" src="assests/jquery/jquery.min.js"></script>

        <!-- DataTables-->
        <link rel="stylesheet" type="text/css" href="assests/plugins/datatables/jquery.dataTables.min.css"></script>
    <script type="text/javascript" src="assests//plugins/datatables/jquery.dataTables.min.js"></script>

    <!-- ChartJS -->
    <script src="assests/plugins/chartjs/Chart.min.js"></script>

    <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.css">
    <script src="assests/jquery-ui/jquery-1.12.4.js"></script>
    <script src="assests/jquery-ui/jquery-ui.js"></script>



    <!-- Tabla dinamica -->

    <link rel="stylesheet" type="text/css" href="assests/librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="assests/librerias/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="assests/librerias/select2/css/select2.css">

    <script src="assests/librerias/jquery-3.2.1.min.js"></script>

    <script src="assests/librerias/alertifyjs/alertify.js"></script>
    <script src="assests/librerias/select2/js/select2.js"></script>

    <!-- toggle ya se encuentra en asistencia (Solo para asistencia)

    <script src="assests/toggle/js/bootstrap-toggle.js" type="text/javascript"></script>
    <link href="assests/toggle/css/bootstrap-toggle.css" rel="stylesheet" type="text/css"/>
    -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'porcentaje'],
                ['asistencia', 11],
                ['tardanza', 2],
                ['motivación', 2],
                ['retraso académico', 2],
                ['desmotivación', 7]
            ]);

            var options = {
                title: 'Registro de rendimiento'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
</head>
<body style="background-color: #082247;width:100%">

    <div class="container">
        <div class="imgtitulo"><center><img src="assests/images/bbva.png" width="180" class="img-responsive"></center></div>
        <div class="titulo"><p style="font-size: xx-large;"><b>¡Bienvenido!</b></p>
            <p>Mira los productos que tenemos para ti</p></div>
    </div>


    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <form action="producto.php" method="post"> 
                <div class="col-md-12">
                    <p style="font-size:x-large; color: white;padding-top:2%;padding-bottom:1%">¿Ingrese su número de RUC?</p>

                    <div class="row" >
                        <div class="col-md-6"> 
                            <input type="number" name="ruc" placeholder="Ingrese su RUC" style="background-color:#004481;border: 0;  border-radius: 5px; color: white ; width: 75%; height: 30px; font-size: large"> 
                        </div> 
                    </div>

                </div>
                <div class="col-md-12" style="margin-top: 2%;padding-top: 5%">
                    <input type="submit" value="Solicitar Ahora &raquo;" class="btn btn-bbva pull-right" >
                </div>
            </form>
        </div>
    </div> <!-- /container -->        


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
</body>
</html>
