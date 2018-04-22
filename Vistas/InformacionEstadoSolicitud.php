<?php
session_start();
error_reporting(0);
require "../Controlador/SolicitudController.php";
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
    .dropbtn {
        background-color: #179b77;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropbtn:hover, .dropbtn:focus {
        /*background-color: #2980B9;
    */ }

    .dropdown {
        position: relative;
        display: inline-block;
        margin-left: -250px;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {background-color: #ddd}

    .show {display:block;}
</style>
<br>
<div class="dropdown">
    <?php echo "<button onclick='myFunction()' class='dropbtn'>".($_SESSION['DataPersona']['Nombre'])." ".($_SESSION['DataPersona']['Apellido'])."</button>"; ?>
    <div id='myDropdown' class='dropdown-content'>
        <a href='#home'>Actualizar datos</a>
        <a href='../Controlador/UsuarioController.php?action=CerrarSession'>Cerrar Sesion</a>
    </div>

</div>
<style>
    body {
        background-size: 100%;
        background-image: url("css/alcaldia2.jpg");
        position: absolute;
        margin-left: 450px;
    }
</style>
<div id="cabeza">
    <font color="Olive" face=",arialComic Sans MS">
        <h1><center><font color="white">Certificado Sanitario Yopal</font></center></h1>
    </font></div>
<?php if(!empty($_GET['respuesta'])){ ?>
    <?php if ($_GET['respuesta'] == "correcto"){ ?>
        <script>
            alert("Registro Exitoso");
            location.href="Formulario.php";

        </script>
        <script>
            $(document).ready(function () {
                $('#signup').hide();
                $('#li-signup').hide();
            });
        </script>
    <?php }else { ?>
        <script>
            alert("Registro fallido");
            location.href="Formulario.php";
        </script>
    <?php } ?>
<?php } ?>
<div class="form">

    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Estado Solicitud</a></li>
        <li class="tab"><a href="#login">Editar Información</a></li>
    </ul>

    <div class="tab-content">
        <div id="signup">


            <h1>Estado de Solicitud</h1>

            <form  method="post" id="frmLogin"  >

            <div class="top-row">

            </div>
            <div class="field-wrap">
                <label>
                    Estado: <?php echo SolicitudController::Estado($_SESSION['DataPersona']['Id']) ?>
                </label>



            </div>
            </form>
        </div>

        <div id="login">
            <h1>Editar Información</h1>

            <form  method="post" id="frmLogin"  >


        </form>
        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->



<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script  src="js/index.js"></script>

<script>
    /* When the user clicks on the button,
     toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>


</body>

</html>


