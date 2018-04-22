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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

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
            alert("Registro Exitoso, el usuario ya puede iniciar sesion");
            location.href="RegistroFuncionario.php";
        </script>
    <?php }else if($_GET['respuesta'] == "error"){ ?>
        <script>
            alert("Registro fallido");
            location.href="RegistroFuncionario.php";
        </script>
    <?php }  else if ($_GET['respuesta'] == "correctoE"){ ?>
    <script>
        alert("Eliminacion Exitosa.");
        location.href="RegistroFuncionario.php";
    </script>
<?php }else if ($_GET['respuesta'] == "errorE"){  ?>
    <script>
        alert("Eliminacion fallida");
        location.href="RegistroFuncionario.php";
    </script>
<?php } ?>
<?php } ?>

<div class="form">

    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Regìstrar</a></li>
        <li class="tab"><a href="#login">Ver Funcinarios</a></li>
    </ul>

    <div class="tab-content">


        <div id="signup">


            <h1>Registrar Funcionarios</h1>

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
                    <input type="text"  name="direc_user" required autocomplete="off"/>
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
            <h1>Serviciós en linea</h1>

            <table id="customers">
                <thead>
                <tr>
                    <th hidden>id</th>
                    <th>Nombres</th>
                    <th>Cedula</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php echo UsuarioController::tablaPersona(); ?>
                </tbody>

            </table>

            </div>
    </div><!-- tab-content -->
    </div>
</div> <!-- /form -->


<----------------------modal ver----------------------------  -->


<div id="id01" class="modal1">



    <span onClick="document.getElementById('id01').style.display='none'" class="close1" title="Close Modal">&times;</span>


    <div id="Contenedor_11">
        <h1 id="h1_1">Serviciós en linea</h1>

        <div id="object_1">
            <center><table class="customerss">
                    <h4>Datos Personales</h4>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Cedula de Ciudadania</th>
                        <th>Correo Electronico</th>
                        <th>Celular</th>


                    </tr>
                    </thead>
                    <tbody>
                    <?php echo 'sexoo anallll'; ?>
                    </tbody>

                </table>
                    <br>
        </div>



</div>



    <----------------------------------------------------->


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


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
                        //console.log(data);
                        if (data == true){
                            window.location.href = "Formulario.php";
                        }else{
                            $('#results').html(data);
                        }
                    });
                event.preventDefault();
            }
        })
    });
</script>



</body>

</html>


