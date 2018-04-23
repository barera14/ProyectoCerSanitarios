<?php
require ("VerificarSesion.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title> sanitario</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <link rel="stylesheet" type="text/css" href="css/style.css">


</head>

<body>
<style>
    body {
        background-size: 100%;
        background-image: url("css/alcaldia.jpeg");
        position: absolute;
        margin-left: 450px;
    }
</style>

<div id="cabeza">
    <font color="Olive" face=",arialComic Sans MS">
        <h1><center><font color="white">Certificado Sanitario Yopal</font></center></h1>
    </font></div>

    <?php if ($_GET['respuesta'] == "correcto"){ ?>
        <script>
            alert("Registro Exitoso, Por favor inicie sesion");
          
        </script>
    <?php }else if($_GET['respuesta']=='errorUser') { ?>
        <script>
            alert("Error usuario!!");
         
        </script>
    <?php } else if($_GET['respuesta']=='errorSesion') { ?>
    <script>
        alert("Error por favor inicia sesion");
       
    </script>
<?php } else if($_GET['respuesta']=='error'){?>
        <script>
            alert("Error al crear el usuario");
         
        </script>
 <?php }?>

<div class="form">

    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Regìstrate</a></li>
        <li class="tab"><a href="#login">Inicia sesiòn</a></li>
    </ul>

    <div class="tab-content">
        <div id="signup">


            <h1>Seriviciós en Línea</h1>

            <form action="../Controlador/UsuarioController.php?action=crear2" name="formulario" method="post">


                <div class="top-row">
                    <div class="field-wrap">
                        <label>
                            Nombres<span class="req">*</span>
                        </label>
                        <input type="text" name="nom_user" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Apellidos<span class="req">*</span>
                        </label>
                        <input type="text" name="ape_user" required autocomplete="off"/>
                    </div>
                </div>

                <div class="field-wrap">
                    <label>
                        Cèdula de Ciudadanía<span class="req">*</span>
                    </label>
                    <input type="text" name="cc_user" required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Correo Electrònico<span class="req">*</span>
                    </label>
                    <input type="email" name="correo_user"required autocomplete="off"/>
                </div>


                <div class="field-wrap">
                    <label>
                        Direcciòn<span class="req">*</span>
                    </label>
                    <input type="text" name="direc_user" required autocomplete="off"/>
                </div>


                <div class="field-wrap">
                    <label>
                        Celular<span class="req">*</span>
                    </label>
                    <input type="text" name="celu_user" required autocomplete="off"/>
                </div>
                <div class="field-wrap">
                    <label>
                        Contraseña<span class="req">*</span>
                    </label>
                    <input type="PASSWORD" name="pass_user" required autocomplete="off"/>



                </div>



                <input type="submit" value="Ingresar" name="ingresar" class="button button-block"/>

            </form>

        </div>

        <div id="login">
            <h1>Servicios en linea</h1>

            <form  method="post" id="frmLogin">

                <div class="field-wrap">
                    <label>
                        Cedula de Cidadania<span class="req">*</span>
                    </label>
                    <input type="text" name="cedula_user" required autocomplete="off"/>
                </div>
                <div class="field-wrap">
                    <label>
                        Contraseña<span class="req">*</span>
                    </label>
                    <input type="password" name="pass_admin" required autocomplete="off"/>
                </div>
                <div id="results" hidden>

                </div>

                <p class="forgot"><a href="ingreso_administradores.php">Acceso Funcionario.</a></p>

                <input type="submit" value="Ingresar" class="button button-block"/>

            </form>

        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->



<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script  src="js/index.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#frmLogin').on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
                var formData = $(this).serialize(); //Serializamos los campos del formulario
                $.ajax({
                    type        : 'POST', // Metodo de Envio
                    url         : '../Controlador/UsuarioController.php?action=Login', // Ruta del envio
                    data        : formData, // our data object
                    encode      : true
                })
                    .done(function(data) {
                        if (data.indexOf('1') != -1){
                            window.location.href = "Formulario.php";
                           
                              }else{
                            $('#results').html(data);
                        }
                    });
                event.preventDefault();
            }
        });
    });
</script>



</body>

</html>


