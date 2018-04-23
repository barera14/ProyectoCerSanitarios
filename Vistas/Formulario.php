<?php session_start();
error_reporting(0);
require "../Controlador/UsuarioController.php";

if( $_SESSION['validacion']==false){

}else{
    header("Location: InformacionEstadoSolicitud.php");
}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Certificado sanitario</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <link rel="stylesheet" href="css/style.css">
    <style>
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

</head>

<body>
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
        <li class="tab active" ><a href="#signup">Solicitud Sanitaria</a></li>
        <li class="tab" ><a href="#arch" id="ArchivosAdjuntos">Archivos Adjuntos</a></li>

    </ul>

    <div class="tab-content">
        <div id="signup" >
            <h1>Solicitud Certificado Sanitario</h1>

            <form action="../Controlador/SolicitudController.php?action=crearS" name="formul    ario" method="post">

                <div class="top-row">

                </div>
                <div class="field-wrap">

                    <label>
                        Solicitud No<span class="req">* (Automatico) </span>
                    </label>
                    <input type="text" name="Solicitud No" readonly="readonly"<span class="req"></span>

                </div>

                <div class="field-wrap">
                    <label>
                        Nombres<span class="req">*</span>
                    </label>
                    <input type="text" name="nombre"  required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Cédula de Ciudadanía<span class="req">*</span>
                    </label>
                    <input type="number" name="cedula"  required>

                </div>

                <div class="field-wrap">
                    <label>
                        Ciudad de Expediciòn<span class="req">*</span>
                    </label>
                    <input type="text" name="ciudad_expe"required autocomplete="off"/>
                </div>


                <div class="field-wrap">
                    <label>
                        Razón Social<span class="req">*</span>
                    </label>
                    <input type="text" name="razon" required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Nit<span class="req">*</span>
                    </label>
                    <input type="text" name="nit" required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                       Dirección <span class="req">*</span>
                    </label>
                    <input type="text" name="direccion" required autocomplete="off"/>
                </div>
                <div class="top-row">
                <div class="field-wrap">
                    <label>
                        Barrio<span class="req">*</span>
                    </label>
                    <input type="text" name="barrio"  autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                       Comuna <span class="req">*</span>
                    </label>
                    <input type="text" name="comuna"  autocomplete="off"/>
                </div>
                </div>
                <div class="top-row">
                <div class="field-wrap">
                    <label>
                        Vereda<span class="req">*</span>
                    </label>
                    <input type="text" name="vereda"  autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Corregimiento<span class="req">*</span>
                    </label>
                    <input type="text" name="Corregimiento"  autocomplete="off"/>
                </div>
                </div>
                <div class="field-wrap">
                    <label>
                        Teléfono<span class="req">*</span>
                    </label>
                    <input type="text" name="telefono" required autocomplete="off"/>
                </div>


                <div class="field-wrap">

                    <div class="select">
                    <select name="regimen" id="" >
                        <option value="">Seleccione</option>
                        <option value="Comun">Régimen Común</option>
                        <option value="Simplicado">Régímen Simplificado</option>
                    </select>
                    </div>
                    <label>
                        Régimen del Establecimiento<span class="req">*</span>
                    </label>
                </div>


                <div class="field-wrap">

                    <textarea name="actividad" required autocomplete="off"></textarea>
                    <label>
                        Actividad Económica<span class="req">*</span>
                    </label>
                </div>
                <div class="field-wrap">
                    <input  type="text" id="id" name="id" value="<?=$_SESSION['DataPersona']['Id']?>">
                </div>

                <input type="submit" value="Siguiente" id="Enviar" name="siguiente" class="button button-block"/>

            </form>

        </div>

        <div id="arch">
            <h1>Archivos Adjuntos</h1>

            <form  method="post" action="../Controlador/SolicitudController.php?action=crear" enctype="multipart/form-data" id="frmLogin">
                <input hidden type="text" id="cedula" name="cedula" value="<?=$_SESSION['DataPersona']['Cedula']?>">
                <input hidden type="text" id="id" name="id" value="<?=$_SESSION['DataPersona']['Id']?>">
                <div class="field-wrap">
                    <table width="500" border="0" align="center" >
                        <tr>
                            <td width="808"><table  border="0" align="center">

                                    <tr>
                                        <td height="583"><form action="<?php echo $editFormAction; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">

                                                <table >

                                                    <tr valign="baseline" >

                                                        <h2> Cédula de Ciudadanía (PDF,JPG o PGJ)</h2>

                                                            <p><input id="Archivo_recibo" type="file" name="Archivo_recibo"/>&nbsp;
                                                                <a href="" onclick="PreviewImage2(); mostrar2(this, 'oculto2'); return false" />Ver</a></p>
                                                            <div id="oculto2" style="clear:both; display: none">
                                                                <iframe id="viewer2" frameborder="0" scrolling="no" width="350" height="400"></iframe>
                                                            </div>

                                                    </tr>
                                                    <tr valign="baseline" >
                                                        <h2> Certificado de Matricula Mercantil (PDF,JPG o PGJ)</h2>

                                                            <p><input id="Archivo_carnet" type="file" name="Archivo_carnet"/>&nbsp;
                                                                <a href="" onclick="PreviewImage3(); mostrar3(this, 'oculto3'); return false" />Ver</a></p>
                                                            <div id="oculto3" style="clear:both; display: none">
                                                                <iframe id="viewer3" frameborder="0" scrolling="no" width="350" height="400"></iframe>
                                                            </div>

                                                    </tr>
                                                    <tr valign="baseline" >
                                                        <h2>Conepto de Uso de Suelo (PDF,JPG O PGJ)</h2>

                                                            <p><input id="Archivo_poliza" type="file" name="Archivo_poliza"/>&nbsp;
                                                                <a href="" onclick="PreviewImage4(); mostrar4(this, 'oculto4'); return false" />Ver</a></p>
                                                            <div id="oculto4" style="clear:both; display: none">
                                                                <iframe id="viewer4" frameborder="0" scrolling="no" width="350" height="400"></iframe>
                                                            </div>

                                                    </tr>
                                                    <tr valign="baseline" >
                                                        <h2> Formato de Rut (PDF,JPG o PGJ)</h2>

                                                            <p><input id="Archivo_fotos" type="file" name="Archivo_fotos"/>&nbsp;
                                                                <a href="" onclick="PreviewImage5(); mostrar5(this, 'oculto5'); return false" />Ver</a></p>
                                                            <div id="oculto5" style="clear:both; display: none">
                                                                <iframe id="viewer5" frameborder="0" scrolling="no" width="350" height="400"></iframe>
                                                            </div>

                                                    </tr>

                                                </table>
                                                <p><div align="center"> <input type="submit" value="Enviar" name="entrar" class="button button-block"/>


                                                    <input type="hidden" name="MM_insert" value="form1" />
                                            </form></td>
                                    </tr>
                                </table>
                </div>

            </form>

        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->

<script type="text/javascript">
    function PreviewImage1() {
        pdffile1=document.getElementById("Archivo_cedula").files[0];
        pdffile_url1=URL.createObjectURL(pdffile1);
        $('#viewer1').attr('src',pdffile_url1);
    }
    function PreviewImage2() {
        pdffile2=document.getElementById("Archivo_recibo").files[0];
        pdffile_url2=URL.createObjectURL(pdffile2);
        $('#viewer2').attr('src',pdffile_url2);
    }
    function PreviewImage3() {
        pdffile3=document.getElementById("Archivo_carnet").files[0];
        pdffile_url3=URL.createObjectURL(pdffile3);
        $('#viewer3').attr('src',pdffile_url3);
    }
    function PreviewImage4() {
        pdffile4=document.getElementById("Archivo_poliza").files[0];
        pdffile_url4=URL.createObjectURL(pdffile4);
        $('#viewer4').attr('src',pdffile_url4);
    }
    function PreviewImage5() {
        pdffile5=document.getElementById("Archivo_fotos").files[0];
        pdffile_url5=URL.createObjectURL(pdffile5);
        $('#viewer5').attr('src',pdffile_url5);
    }
    function PreviewImage6() {
        pdffile6=document.getElementById("Archivo_Otros").files[0];
        pdffile_url6=URL.createObjectURL(pdffile6);
        $('#viewer6').attr('src',pdffile_url6);
    }
</script>
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
<script>
    function mostrar1(enla1) {
        obj1 = document.getElementById('oculto1');
        obj1.style.display = (obj1.style.display == 'block') ? 'none' : 'block';
        enla1.innerHTML = (enla1.innerHTML == 'Cerrar') ? 'Ver' : 'Cerrar';
    }
    function mostrar2(enla2) {
        obj2 = document.getElementById('oculto2');
        obj2.style.display = (obj2.style.display == 'block') ? 'none' : 'block';
        enla2.innerHTML = (enla2.innerHTML == 'Cerrar') ? 'Ver' : 'Cerrar';
    }
    function mostrar3(enla3) {
        obj3 = document.getElementById('oculto3');
        obj3.style.display = (obj3.style.display == 'block') ? 'none' : 'block';
        enla3.innerHTML = (enla3.innerHTML == 'Cerrar') ? 'Ver' : 'Cerrar';
    }
    function mostrar4(enla4) {
        obj4 = document.getElementById('oculto4');
        obj4.style.display = (obj4.style.display == 'block') ? 'none' : 'block';
        enla4.innerHTML = (enla4.innerHTML == 'Cerrar') ? 'Ver' : 'Cerrar';
    }
    function mostrar5(enla5) {
        obj5 = document.getElementById('oculto5');
        obj5.style.display = (obj5.style.display == 'block') ? 'none' : 'block';
        enla5.innerHTML = (enla5.innerHTML == 'Cerrar') ? 'Ver' : 'Cerrar';
    }
    function mostrar6(enla6) {
        obj6 = document.getElementById('oculto6');
        obj6.style.display = (obj6.style.display == 'block') ? 'none' : 'block';
        enla6.innerHTML = (enla6.innerHTML == 'Cerrar') ? 'Ver' : 'Cerrar';
    }
</script>


<style type="text/css">
   

    .Estilo1 {
        color: #FFFFFF;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        font-style: italic;
    }
    .Estilo2 {font-family: Arial, Helvetica, sans-serif}
    .Estilo7 {font-family: Verdana, Geneva, sans-serif;
        text-align: center;
        font-weight: bold;
        font-style: italic;
        color: #FFFFFF;
    }

</style>


<script  src="js/index.js"></script>
<script>
    $(document).ready(function () {
        $('#Enviar').click(function () {
            $('#ArchivosAdjuntos').html();
        });
    });
</script>


</body>

</html>


