<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Expires" content="0">

        <meta http-equiv="Last-Modified" content="0">

        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">

        <meta http-equiv="Pragma" content="no-cache">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Portal Procesos | Heatmap</title>

        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 css-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link media="screen" rel="stylesheet" href="../../assests/plugins/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="../../assests/plugins/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="../../assests/plugins/bootstrap/css/ionicons.min.css">
        <!--estilos propios -->
        <link rel="stylesheet" href="../../assests/plugins/dist/css/styles_1.css"> <!-- cambio el color de navbar -->
        <!-- daterange picker -->

        <!-- Select2 -->
        <link rel="stylesheet" href="../../assests/plugins/select2/select2.min.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="../../assests/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../assests/plugins/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../../assests/plugins/dist/css/skins/_all-skins.min.css">

        <link rel="icon" href="../../assests/images/bbvaicon.png">
        <link rel="shortcut icon" href="../../assests/images/bbvaicon.png">

        <!-- Marcador en escritorio de Iphone-->
        <link rel="apple-touch-icon" href="../../assests/images/icon.png">

        <!-- Include Required Prerequisites -->
        <script type="text/javascript" src="../../assests/jquery/jquery.min.js"></script>

        <!-- DataTables-->
        <link rel="stylesheet" type="text/css" href="../../assests/plugins/datatables/jquery.dataTables.min.css"></script>
    <script type="text/javascript" src="../../assests//plugins/datatables/jquery.dataTables.min.js"></script>

    <!-- ChartJS -->
    <script src="../../assests/plugins/chartjs/Chart.min.js"></script>

    <link rel="stylesheet" href="../../assests/jquery-ui/jquery-ui.css">
    <script src="../../assests/jquery-ui/jquery-1.12.4.js"></script>
    <script src="../../assests/jquery-ui/jquery-ui.js"></script>



    <!-- Tabla dinamica -->

    <link rel="stylesheet" type="text/css" href="../../assests/librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../../assests/librerias/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="../../assests/librerias/select2/css/select2.css">

    <script src="../../assests/librerias/jquery-3.2.1.min.js"></script>

    <script src="../../assests/librerias/alertifyjs/alertify.js"></script>
    <script src="../../assests/librerias/select2/js/select2.js"></script>

    <!-- toggle ya se encuentra en asistencia (Solo para asistencia)

    <script src="../../assests/toggle/js/bootstrap-toggle.js" type="text/javascript"></script>
    <link href="../../assests/toggle/css/bootstrap-toggle.css" rel="stylesheet" type="text/css"/>
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


<body class="hold-transition skin-blue sidebar-mini" style="font-family: Gill Sans Extrabold, Helvetica, sans-serif">


    <script type="text/javascript" src="../../assests/datepicker/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="../../assests/datepicker/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../assests/datepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="../../assests/datepicker/js/locales/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>
    <link href="../../assests/datepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link href="../../assests/datepicker/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <div class="wrapper"> 

        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><IMG SRC="../../assests/images/bbvaicon.png" WIDTH=50 HEIGHT=50></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><IMG SRC="../../assests/images/bbvalogo.png" WIDTH=130 HEIGHT=100%></span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top"> <!-- navbar se buca en stiles 1 y en all_skin.min.css (palabra a buscar : corregido) para cambiar colores -->
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="hidden-xs" style="color:#082247"><b>Empresa: <?php  echo $_SESSION['datos_empresa']['razonSocial'];?></b></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img width="90" height="90" class="img-circle" alt="User Image" src="../../assests/images/cuenta_corriente.png" >
                    </div>
                    <div class="pull-left info">
                        <p>Cuenta Corriente</p> 
                        <small>100% Digital</small>


                    </div>
                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header"><b>Ahora Abre tu cuenta 100% Digital,<br> muy facil y rápido</b></li>
                        <?php include '../../includes/menu_header/menu_1_1.php'; ?>
                </ul>

            </section>
            <!-- /.sidebar -->
        </aside>

