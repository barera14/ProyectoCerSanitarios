<?php
require "../Controlador/UsuarioController.php";
?>
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title> sanitario</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/inicio.css" />

    <link rel="stylesheet" href="css/style.css">


</head>

            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">

                        <div class="modal-body">

                            <center> <table class="customerss">
                                    <h4>Informacion del establecimiento</h4>
                                    <thead>

                                    <tr>
                                        <th>Nit</th>
                                        <th>Razon Social</th>
                                        <th>Direccion</th>
                                        <th>Barrio</th>
                                        <th>Vereda</th>
                                        <th>Comuna</th>
                                        <th>Corregimiento</th>
                                        <th>Telefono</th>
                                        <th>Regimen</th>
                                        <th>Actividad Economica</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php // echo UsuarioController::tablaPersona3($_GET['id']); ?>
                                    </tbody>

                                </table></center>
                            <br>
                            <center> <table class="customerss">
                                    <h4>Archivos Adjuntos (PDF,JPG o PGJ)</h4>
                                    <thead>

                                    <tr>
                                        <th>Cédula de Ciudadanía </th>
                                        <th>Certificado de Matricula Mercantil </th>
                                        <th>Conepto de Uso de Suelo </th>
                                        <th>Formato de Rut</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php // echo UsuarioController::Solicitudes($_GET['id']); ?>
                                    </tbody>

                                </table></center>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- tab-content -->
</div>
<script >


    function mi_funcion(id)
    {
        var x  = parseInt(id);
        alert("Me haz dado un click "+id);
    }

</script>
</div> <!-- /form -->



<----------------------modal ver----------------------------  -->


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-body">

                <center> <table class="customerss">
                        <h4>Informacion del establecimiento</h4>
                        <thead>

                        <tr>
                            <th>Nit</th>
                            <th>Razon Social</th>
                            <th>Direccion</th>
                            <th>Barrio</th>
                            <th>Vereda</th>
                            <th>Comuna</th>
                            <th>Corregimiento</th>
                            <th>Telefono</th>
                            <th>Regimen</th>
                            <th>Actividad Economica</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php // echo UsuarioController::tablaPersona3($_GET['id']); ?>
                        </tbody>

                    </table></center>
                <br>
                <center> <table class="customerss">
                        <h4>Archivos Adjuntos (PDF,JPG o PGJ)</h4>
                        <thead>

                        <tr>
                            <th>Cédula de Ciudadanía </th>
                            <th>Certificado de Matricula Mercantil </th>
                            <th>Conepto de Uso de Suelo </th>
                            <th>Formato de Rut</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php // echo UsuarioController::Solicitudes($_GET['id']); ?>
                        </tbody>

                    </table></center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>


<----------------------------------------------------->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal();
        });
    });
</script>
<script  src="js/index.js"></script>


</body>

</html>



