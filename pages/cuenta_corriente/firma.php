<?php
session_start();
error_reporting(0);
include ('../../includes/header_1.php');

if ($_POST) {
    $dni = $_POST['dni'];
    $data = json_decode(file_get_contents('http://pymesbbva-env-1.eba-mec6ejc3.sa-east-1.elasticbeanstalk.com/pymesbbva/api/v1/representantes-legales/72777438'), true);
    $data2 = json_decode(file_get_contents('http://pymesbbva-env-1.eba-mec6ejc3.sa-east-1.elasticbeanstalk.com/pymesbbva/api/v1/cartas-poder/58469932'), true);
    $_SESSION['representantes_legales'] = $data;
    $_SESSION['expediente'] = $data2;
}
?>
<!DOCTYPE html>

<script src="../../pages/cuenta_corriente/componentes/funciones.js"></script> 

<!-- ******   CUERPO DEL PROGRAMAAAAAA *******************************************-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <section class="content-header">
        <h1> <i class='fa fa-edit'></i> <big>Firma tu contrato</big></h1>

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
                                <h3 class="box-title">Resumen</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Producto</label>
                                            <p>Cuenta Corriente</p>
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
                                            <label>Representante Legal</label>
                                            <p><?php echo $_SESSION['representantes_legales']['nombres'] . " " . $_SESSION['representantes_legales']['apellidos']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p>Revisa la documentación generado <a>aquí</a></p>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>


                        <div class="box box-default">
                            <div class="box-header with-border">
                                <h3 class="box-title">Reconocimiento de identidad</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>- Para la presente firma, necesitamos reconocerte; para ello usaremos la identificación biométrica. <br> - Por favor da clic en “Reconocimiento facial” y te identificaremos. (Asegurate estar en un lugar iluminado)</p>
                                    </div>

                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-facebook" onclick="ventanaSecundaria('camara.php')">Reconocimiento Facial</button>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <script language=javascript>
                            function ventanaSecundaria(URL) {
                                window.open(URL, "ventana1", "width=640,height=480,scrollbars=NO,top=10")
                            }
                        </script>

                        <div class="box box-default">
                            <div class="box-header with-border">
                                <h3 class="box-title">Preguntas de seguridad</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse" ><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><b>Te realizaremos algunas preguntas para conocerte aún más, responde sin equivocarte por favor.</b></p>
                                    </div><!-- comment -->
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>¿Aperturaste una cuenta de ahorro en los últimos 3 meses?</p>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Si
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>¿El segundo nombre de tu mamá es Juana?</p>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault11">
                                            <label class="form-check-label" for="flexRadioDefault11">
                                                Si
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault21">
                                            <label class="form-check-label" for="flexRadioDefault21">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-8">
                                        <p>¿Has solicitado un préstamo vehicular en los ultimos 6 meses?</p>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault12">
                                            <label class="form-check-label" for="flexRadioDefault12">
                                                Si
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault22">
                                            <label class="form-check-label" for="flexRadioDefault22">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            
                               <div class="box box-default">
                            <div class="box-header with-border">
                                <h3 class="box-title">Verificación SMS</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p> Te enviaremos un codigo de 4 digitos al número de celular registrado en OSIPTEL</p>
                                    </div>

                                    <div class="col-md-8">
                                        <button type="button" class="btn btn-facebook" onclick="enviarsms('5555')">enviar SMS</button> <input id="numberpin" type="text" placeholder="ingrese PIN" max="4"> <br><br>
                                    </div>
                                    <div class="col-md-8">
                                        <button type="button" class="btn btn-facebook" onclick="validarsms()">validar</button>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>

                            <div class="col-md-12" style="margin-top: 2%;padding-top: 5%">
                               <a href="disfruta.php" class="btn btn-primary btn-lg active pull-right" role="button" aria-pressed="true">Continuar</a>
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

