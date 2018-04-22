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

<body>
<br>
<div style="margin-left: 450px;">
    <div id="cabeza">
        <font color="Olive" face=",arialComic Sans MS">
            <h1><center><font color="white">Certificado Sanitario Yopal</font></center></h1>
        </font></div>
    <?php if(!empty($_GET['respuesta'])){ ?>
        <?php if ($_GET['respuesta'] == "correcto"){ ?>
            <script>
                alert("Registro Exitoso");
            </script>
        <?php }else if($_GET['respuesta'] == "error"){ ?>
            <script>
                alert("Registro fallido");
            </script>
        <?php }  ?>
    <?php } ?>

    <div class="form">

        <ul class="tab-group">

            <li class="tab active"><a href="#signup"><V></V> ver Usuario</a></li>
            <li class="tab"><a href="#login">Solicitudes</a></li>
            <li class="tab"></li>
        </ul>

        <div class="tab-content">


            <div id="signup">

                <form action="../Controlador/UsuarioController.php?action=crear3" name="formulario" method="post">

                    </div>

                </form>

            </div>
            <style>
                body{
                    background-size: 100%;
                    background-image: url("css/funcionario.jpg");
                    position: absolute;
                }
                #customers {
                    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                }

                #customers td, #customers th {
                    border: 1px solid #ddd;
                    padding: 8px;
                }

                #customers tr{background-color: #f2f2f2;}


                #customers th {
                    padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: #1ab188;
                    color: white;
                }

            </style>

            <div id="login">
                <h1>Solicitudes en linea</h1>


                <table id="customers">
                    <thead>
                    <tr>
                        <th hidden>id</th>

                        <th>Nombres</th>
                        <th>Cedula</th><input id="text">
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php echo UsuarioController::tablaPersona2(); ?>
                    </tbody>

                </table>

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


