<?php
session_start();
error_reporting(0);
include ('../../includes/header_1_1.php');

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
        <h1> <big>¡Tu cuenta corriente BBVA está lista!</big></h1>

    </section>



    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Profile Image -->
                <div class="box box-success">

                    <div class="panel-body">
                        <div class="row"><div class="col-md-1"></div>
                            <div class="col-md-6">
                                <h2>¡Henry Villanueva!</h2>
                                <p>¡Disfruta de la nueva cuenta corriente BBVA para InnovationCenter SAC</p>
                                <br><br>
                                <p>1. Realiza operaciones gratis en nuevos canales digitales.</p>
                                <p>2. Desde hoy puedes recoger la tarjeta en cualquier oficina BBVA.</p>
                            </div>
                            <div class="col-md-5">
                                <center><img src="../../assests/images/tarjetabbva.png" width="380" class="img-responsive"></center>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" style="margin: 5%">
                                <p> Ingrese el correo electrónico para enviarle los documentos digitales.</p>

                                <button type="button" class="btn btn-facebook" onclick="enviarmail('henry.villanueva@unmsm.edu.pe')">enviar</button> <input id="numberpin" type="email" placeholder="ingrese mail" > <br><br>
                            </div>
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

