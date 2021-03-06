<?php
error_reporting(0);
require "../Controlador/SolicitudController.php";
require "../Controlador/UsuarioController.php";
if( $_SESSION['DataPersona']['cargo']=='usuario'){

}else{
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title> sanitario</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
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
<button onclick='myFunctions()' class='dropbtn'> <?php echo ($_SESSION['DataPersona']['Nombre'])." ".($_SESSION['DataPersona']['Apellido']); ?></button>
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
        </script>
    <?php }else { ?>
        <script>
            alert("Registro fallido");
        </script>
    <?php } ?>
<?php } ?>
<div class="form">

    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Estado Solicitud</a></li>
        <li class="tab"><a href="#login" type="submit" onclick="ActiveForm()">Editar Información</a></li>
    </ul>

    <div class="tab-content">
        <div id="signup">
        <?php  $DataPersona = SolicitudController::buscarID($_SESSION['DataPersona']['Id']);  ?>

            <h1>Estado de Solicitud</h1>

            <form  method="post" id="frmLogin"  >
            <div class="field-wrap">
               <?php echo SolicitudController::Estado($_SESSION['DataPersona']['Id']) ?>  
               <?php if($DataPersona->getEstaado()=="Rechazada"){ ?>
            <a href="javascript:window.location.href='../Controlador/SolicitudController.php?action=Delete&id=<?=$_SESSION['DataPersona']['Id']?>';" class='btn btn-large btn-block btn-success'>Crear Solicitud</a>"
          <?php  } ?>
            </div>
            
            </form>
        </div>

        <div id="login">
            <h1>Editar Información</h1>
          

            <form action="../Controlador/SolicitudController.php?action=EditarSolicitud" name="formulario" method="post">

            <style>
            .form-mod{
                position: absolute;
                top:45px;
                left:5px;   
                color:  #a0b3b0;
                 pointer-events: none;
                font-size: 14px;
            }
            </style>
                <div class="field-wrap">
                    <label class="form-mod">
                        Nombres<span class="req">*</span>
                    </label>
                    <input type="text" name="nombre"  value="<?php echo $DataPersona->getNombres(); ?>"   required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label class="form-mod">
                        Cédula de Ciudadanía<span class="req">*</span>
                    </label>
                    <input type="number" id="cedula" name="cedula"  value="<?php echo $DataPersona->getCedula(); ?>"  required>

                </div>

                <div class="field-wrap">
                    <label class="form-mod">
                        Ciudad de Expediciòn<span class="req">*</span>
                    </label>
                    <input type="text" name="ciudad_expe"required value="<?php echo $DataPersona->getCiudadExpedicion(); ?>"  autocomplete="off"/>
                </div>


                <div class="field-wrap">
                    <label class="form-mod">
                        Razón Social<span class="req">*</span>
                    </label>
                    <input type="text" name="razon" value="<?php echo $DataPersona->getRazonSocial(); ?>" required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label class="form-mod">
                        Nit<span class="req">*</span>
                    </label>
                    <input type="text" name="nit"  value="<?php echo $DataPersona->getNit(); ?>" required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label class="form-mod">
                       Dirección <span class="req">*</span>
                    </label>
                    <input type="text" name="direccion" value="<?php echo $DataPersona->getDireccion(); ?>" required autocomplete="off"/>
                </div>
                <div class="top-row">
                <div class="field-wrap">
                    <label class="form-mod">
                        Barrio<span class="req">*</span>
                    </label>
                    <input type="text" name="barrio" value="<?php echo $DataPersona->getBarrio(); ?>"  autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label class="form-mod">
                       Comuna <span class="req">*</span>
                    </label>
                    <input type="text" name="comuna" value="<?php echo $DataPersona->getComuna(); ?>"  autocomplete="off"/>
                </div>
                </div>
                <div class="top-row">
                <div class="field-wrap">
                    <label class="form-mod">
                        Vereda<span class="req">*</span>
                    </label>
                    <input type="text" name="vereda"  value="<?php echo $DataPersona->getVereda(); ?>"  autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label class="form-mod">
                        Corregimiento<span class="req">*</span>
                    </label>
                    <input type="text" name="Corregimiento"  value="<?php echo $DataPersona->getCorregimiento(); ?>"  autocomplete="off"/>
                </div>
                </div>
                <div class="field-wrap">
                    <label class="form-mod">
                        Teléfono<span class="req">*</span>
                    </label>
                    <input type="text" name="telefono" id="telefono" value="<?php echo $DataPersona->getTelefono(); ?>"  required autocomplete="off"/>
                </div>


                <div class="field-wrap">

                    <div class="select">
                    <select name="regimen" id="" >
                        <option value="">Seleccione</option>
                        <option value="Comun"  <?php if($DataPersona->getRegimen() == "Comun"){ echo "selected"; } ?>>Régimen Común</option>
                        <option value="Simplicado"  <?php if($DataPersona->getRegimen() == "Simplicado"){ echo "selected"; } ?>>Régímen Simplificado</option>
                    </select>
                    </div>
                    <label>
                        Régimen del Establecimiento<span class="req">*</span>
                    </label>
                </div>
                <div class="field-wrap">

                    <textarea name="actividad" required autocomplete="off"><?php echo $DataPersona->getActividadEconomica(); ?></textarea>
                    <label>
                        Actividad Económica<span class="req">*</span>
                    </label>
                </div>
                <div class="field-wrap">
                    <input hidden type="text" id="id" name="id" value="<?=$_SESSION['DataPersona']['Id']?>">
                </div>

                <input type="submit" value="Guardar" id="Enviar" name="siguiente" class="button button-block"/>

            </form>
        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->



<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>
    $('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');

      
     
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);

  
});
</script>
<script>
    function myFunctions() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
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


