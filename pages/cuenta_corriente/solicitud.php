<?php
session_start();
error_reporting(0);
include ('../../includes/header.php');

if ($_POST) {
    $dni = $_POST['dni'];
    $data = json_decode(file_get_contents('http://pymesbbva-env-1.eba-mec6ejc3.sa-east-1.elasticbeanstalk.com/pymesbbva/api/v1/representantes-legales/72777438'), true);
    $data2 = json_decode(file_get_contents('http://pymesbbva-env-1.eba-mec6ejc3.sa-east-1.elasticbeanstalk.com/pymesbbva/api/v1/cartas-poder/58469932'), true);
    $_SESSION['representantes_legales'] = $data;
    $_SESSION['expediente'] = $data2;
}
?>
<!DOCTYPE html>

<script src="../../pages/heatmap/js/funciones.js"></script> 

<!-- ******   CUERPO DEL PROGRAMAAAAAA *******************************************-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <section class="content-header">
        <h1> <i class='fa fa-edit'></i> <big>Validar Solicitud</big></h1>

    </section>



    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Profile Image -->
                <div class="box box-success">

                    <div class="panel-body">
                        <div class="box box-default">
                            <div class="box-header with-border">
                                <h3 class="box-title">Datos de la Empresa</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>RUC</label>
                                            <p><?php echo $_SESSION['datos_empresa']['ruc']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nombre Comercial</label>
                                            <p><?php echo $_SESSION['datos_empresa']['razonSocial']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Rubro</label>
                                            <p><?php echo $_SESSION['datos_empresa']['rubro']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Inicio de Actividades</label>
                                            <p><?php echo $_SESSION['datos_empresa']['fechaInicioActividad']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <p><?php echo $_SESSION['datos_empresa']['estado']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Direccion Fiscal</label>
                                            <p><?php echo $_SESSION['datos_empresa']['direccionFiscal']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nivel de Calificación</label>
                                            <p><?php echo $_SESSION['datos_empresa']['nivelClasificacion']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Gerente General</label>
                                            <p><?php echo $_SESSION['datos_empresa']['gerenteGeneral']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Gerente Administrativo</label>
                                            <p><?php echo $_SESSION['datos_empresa']['gerenteAdministrativo']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>


                        <div class="box box-default">
                            <div class="box-header with-border">
                                <h3 class="box-title">Datos del Representante Legal</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="loginform"> 
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Ingresa tu DNI</label> <input type="text" name="dni"> <button type="submit" class="btn btn-primary">Buscar</button> 

                                                <spam>* Los Datos a continuación se completarán solos</spam>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nombres</label>
                                            <p><?php echo $_SESSION['representantes_legales']['nombres']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Apellidos</label>
                                            <p><?php echo $_SESSION['representantes_legales']['apellidos']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Estado Civil</label>
                                            <p><?php echo $_SESSION['representantes_legales']['estadoCivil']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Edad</label>
                                            <p><?php echo $_SESSION['representantes_legales']['edad']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Sexo</label>
                                            <p><?php echo $_SESSION['representantes_legales']['sexo']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Direccion </label>
                                            <p><?php echo $_SESSION['representantes_legales']['direccion']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        
                        
                            <div class="box box-default">
                            <div class="box-header with-border">
                                <h3 class="box-title">Datos del Representante Legal</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="loginform"> 
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Numero de Expediente</label> <input type="text" name="exp"> <button type="submit" class="btn btn-primary">Buscar</button> 

                                                <spam>* Los Datos a continuación se completarán solos</spam>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Empresa</label>
                                            <p><?php echo $_SESSION['expediente']['empresa']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Poderdante</label>
                                            <p><?php echo $_SESSION['expediente']['poderdante']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Rol Poderdante</label>
                                            <p><?php echo $_SESSION['expediente']['rolPoderdante']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tipo</label>
                                            <p><?php echo $_SESSION['expediente']['tipo']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <p><?php echo $_SESSION['expediente']['estado']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Apoderado </label>
                                            <p><?php echo $_SESSION['expediente']['apoderado']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            
                             <div class="col-md-12" style="margin-top: 2%;padding-top: 5%">
                                 <a href="firma.php" class="btn btn-primary btn-lg active pull-right" role="button" aria-pressed="true">Continuar</a>
                </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div><!--panel-body-->

            </div>
            <!-- /.box image -->
        </div>
</div>
</section>


</div>

<?php include ('../../includes/footer.php'); ?>

