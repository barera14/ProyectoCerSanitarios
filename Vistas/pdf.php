<?php
require "../Controlador/UsuarioController.php";
require "../Controlador/SolicitudController.php";
if( $_SESSION['DataPersona']['cargo']=='Funcionario'){

}else{
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Certificado sanitario</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<style>
    body {
        background-size: 100%;
        background-image: url("css/alcaldia2.jpg");
        position: absolute;
        margin-left: 450px;

    }
    spam{
        color:white;
    }
</style>
  <div id="cabeza">
  <div class="dropdown">
<button onclick='myFunctions()' class='dropbtn'><?php echo ($_SESSION['DataPersona']['Nombre'])." ".($_SESSION['DataPersona']['Apellido']); ?></button>
    <div id='myDropdown' class='dropdown-content'>
     <a href='#home'>Actualizar datos</a>
    <a href='../Controlador/UsuarioController.php?action=CerrarSession'>Cerrar Sesion</a>
    </div>
</div>
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
  <font color="Olive" face=",arialComic Sans MS">
  <h1><center><font color="white">Certicado Sanitario Yopal</font></center></h1>
  </font></div>  
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
  <div class="form" style="width:1050px;">
        <div id="login">   
          <h1>Infromacion de Solicitud</h1>
         
          <h2>Informacion de Usuario</h2>
          <?php  $DataPersona = UsuarioController::buscarID($_GET['id']);  ?>
          <div class="field-wrap">
          <table>
          <tr>
          <th>&nbsp<spam> Nombres </spam></th>
          <th>&nbsp<spam> Apellidos</spam></th>
          <th>&nbsp<spam> Cedula </spam></th>
          </tr>
          <tr>
          <td><spam><?php echo $DataPersona->getNombre(); ?></spam></td>
          <td><spam><?php echo $DataPersona->getApellido(); ?></spam> </td>
          <td><spam><?php echo $DataPersona->getCedula(); ?></spam> </td>
          </tr>
          <tr>
          <th>&nbsp<spam> Correo</spam></th>
          <th>&nbsp<spam> Dirección</spam> </th>
          <th>&nbsp<spam> Celular </spam></th>
          </tr>
          <tr>
          <td><spam><?php echo $DataPersona->getCorreo(); ?></spam></td>
          <td><spam><?php echo $DataPersona->getDireccion(); ?></spam></td>
          <td><spam><?php echo $DataPersona->getCelular(); ?></spam></td>
          </tr>
          </table>
          
          </div>
          <?php  $DataEsta = SolicitudController::buscarID($_GET['id']);  ?>
          <div class="field-wrap">
          <h2>Informacion de Establecimiento</h2>
          <table>
          <tr>
          <th>&nbsp<spam> Razon Social </spam></th>
          <th>&nbsp<spam> Nit</spam></th>
          <th>&nbsp<spam> Direcion </spam></th>
          </tr>
          <tr>
          <td><spam><?php echo $DataEsta->getRazonSocial(); ?></spam></td>
          <td><spam><?php echo $DataEsta->getNit(); ?></spam> </td>
          <td><spam><?php echo $DataEsta->getDireccion(); ?></spam> </td>
          </tr>
          <tr>
          <th>&nbsp<spam> Barrio</spam></th>
          <th>&nbsp<spam> Comuna</spam> </th>
          <th>&nbsp<spam> Vereda </spam></th>
          </tr>
          <tr>
          <td><spam><?php echo $DataEsta->getBarrio(); ?></spam></td>
          <td><spam><?php echo $DataEsta->getComuna(); ?></spam></td>
          <td><spam><?php echo $DataEsta->getVereda(); ?></spam></td>
          </tr>
          <tr>
          <th>&nbsp<spam> Corregimiento</spam></th>
          <th>&nbsp<spam> Telefono</spam> </th>
          <th>&nbsp<spam> Regimen </spam></th>
          </tr>
          <tr>
          <td><spam><?php echo $DataEsta->getCorregimiento(); ?></spam></td>
          <td><spam><?php echo $DataEsta->getTelefono(); ?></spam></td>
          <td><spam>Regimen <?php $DataEsta->getRegimen();?></spam></td>
          </tr>
          </table>
         
          </div>
          <h2>Archivos Subidos</h2>
          <table id="customers">
                    <thead>
                    <tr>
                        <th hidden>id</th>
                        <th style="width:20%">Cedula</th>
                        <th style="width:25%">Camara de Comercio</th>
                        <th style="width:20%">Formulario</th>
                        <th style="width:20%">Rut</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  echo UsuarioController::Solicitudes($_GET['id']); ?>
                    </tbody>
                </table>
                <br>
                <form  method="post" id="frmLogin" action="../Controlador/SolicitudController.php?action=Solicitud" enctype="multipart/form-data">
                <?php if($DataEsta->getEstaado() == "Proceso de Visita"){   ?>
                <div class="field-wrap">
                <input type="file"  name="archivo"  required autocomplete="off"/>
                     <label>
                    Certificado<span class="req">*</span>
                    </label>
                </div>
                <?php }?>
                <div class="field-wrap">
                <input type="text" hidden name="id" value="<?php echo $_GET['id']; ?>" required autocomplete="off"/>
                <?php if($DataEsta->getEstaado() != "Aceptada"){   ?>  
                <textarea name="observaciones" id="observaciones" required autocomplete="off"><?php echo $DataEsta->getObservacion();?></textarea>
                <?php }else{   ?>
                    <textarea name="observaciones" id="observaciones" autocomplete="off" readonly> <?php echo $DataEsta->getObservacion();?></textarea>
                    <?php }?>
                    <label>
                       Observaciones<span class="req">*</span>
                    </label>
                </div>
                <br/>
                <div class="field-wrap">
                <?php if($DataEsta->getEstaado() != "Aceptada"){   ?>  
                    <div class="select">
                    <select name="estado" id="estado" >
                        <option value="">Seleccione</option> 
                        <?php if($DataEsta->getEstaado() == "Solicitada"){   ?>
                            <option value="Proceso de Visita">Proceso de Visita</option>
                        <?php }else if($DataEsta->getEstaado() == "Proceso de Visita"){   ?>
                            <option value="Aceptada" >Aceptada</option>
                        <?php }else{ ?>
                            <option value="Solicitada">Solicitada</option>
                        <?php }?>
                        <option value="Rechazada"<?php if($DataEsta->getEstaado() == "Rechazada"){ echo "selected";  }?>>Rechazada</option>
                    </select>
                    </div>
                    <label>
                        Estado de Solicitud<span class="req">*</span>
                    </label>
                </div>
                <?php }else{?>
                <div class="field-wrap">
                <spam type="text" style="font-size:25px; position:adsolute; left:20px;" name="estado" id="estado" readonly  required autocomplete="off"/> <?php echo $DataEsta->getEstaado(); ?></spam>
                <br>
                    <label class="form-mod">
                    Estado de Solicitud<span class="req">*</span>
                    </label>
                  
                </div>
                <?php }?>
                <br/>
                <?php if($DataEsta->getEstaado() != "Aceptada"){   ?>  
          <input type="submit" value="Guardar" class="btn btn-large btn-block btn-success">
                <?php }?>
          <a href="javascript:window.location.href='Solicitudes.php';" class="btn btn-large btn-block btn-danger">Volver</a>
            </form>
      </div><!-- tab-content -->
</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script  src="js/index.js"></script>
<script>
    /* When the user clicks on the button,
     toggle between hiding and showing the dropdown content */
    function myFunctions() {
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
<script type="text/javascript">
    // $(document).ready(function() {
    //     $('#frmLogin').on('submit', function (e) {
    //         if (!e.isDefaultPrevented()) {
    //             var formData = $(this).serialize(); //Serializamos los campos del formulario
    //             $.ajax({
    //                 type        : 'POST', // Metodo de Envio
    //                 url         : '../Controlador/SolicitudController.php?action=Solicitud', // Ruta del envio
    //                 data        : formData, // our data object
    //                 encode      : true
    //             })
    //                 .done(function(data) {
    //                     if (data.indexOf('1') != -1){
    //                         window.location.href = "Solicitudes.php?respuesta=correcto";
    //                           }else{
    //                         $('#results').html(data);
    //                     }
    //                 });
    //             event.preventDefault();
    //         }
    //     });
    // });
</script>

</body>

</html>