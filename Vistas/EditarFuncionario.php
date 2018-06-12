<?php
require "../Controlador/UsuarioController.php";
if( $_SESSION['DataPersona']['cargo']=='Administrador'){

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
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/inicio.css" />
    <link rel="stylesheet" href="css/style.css">
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

<div style="margin-left: 450px;">
<div class="dropdown">
    <?php echo "<button onclick='myFunction()' class='dropbtn'>".($_SESSION['DataPersona']['Nombre'])." ".($_SESSION['DataPersona']['Apellido'])."</button>"; ?>
    <div id='myDropdown' class='dropdown-content'>
     <a href='#home'>Actualizar datos</a>
    <a href='../Controlador/UsuarioController.php?action=CerrarSession'>Cerrar Sesion</a>
    </div>
</div>
<div id="cabeza">
    <font color="Olive" face=",arialComic Sans MS">
        <h1><center><font color="white">Certificado Sanitario Yopal</font></center></h1>
    </font></div>
  
<?php if(!empty($_GET['respuesta'])){ ?>
    <?php if ($_GET['respuesta'] == "correcto"){ ?>
        <script>
            alert("Registro Exitoso");
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
<?php }?>

<div class="form">

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

    <div>

            <h1>Editar Funcionarios</h1>

            <form action="../Controlador/UsuarioController.php?action=EditarFun&id=<?php echo $_GET['id'];?>" name="formulario" method="post">
            <?php  $DataPersona = UsuarioController::buscarIdFuncionario($_GET['id']);  ?>
                <div class="top-row">
                    <div class="field-wrap">
                        <label class="form-mod">
                            Nombres<span class="req">*</span>
                        </label>
                        <input type="text" name="nom_user" value="<?php echo $DataPersona->getNombre(); ?>" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label class="form-mod">
                            Apellidos<span class="req">*</span>
                        </label>
                        <input type="text" name="ape_user" value="<?php echo $DataPersona->getApellido(); ?>"  required autocomplete="off"/>
                    </div>
                </div>

                <div class="field-wrap">
                    <label class="form-mod">
                        Cèdula de Ciudadanía<span class="req">*</span>
                    </label>
                    <input type="text" name="cc_user" value="<?php echo $DataPersona->getCedula(); ?>"  required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label class="form-mod">
                        Correo Electrònico<span class="req">*</span>
                    </label>
                    <input type="email" value="<?php echo $DataPersona->getCorreo(); ?>"  name="correo_user"required autocomplete="off"/>
                </div>


                <div class="field-wrap">
                    <label class="form-mod">
                        Direcciòn<span class="req">*</span>
                    </label>
                    <input type="text" value="<?php echo $DataPersona->getDireccion(); ?>"   name="direc_user" required autocomplete="off"/>
                </div>


                <div class="field-wrap">
                    <label class="form-mod">
                        Celular<span class="req">*</span>
                    </label>
                    <input type="text" value="<?php echo $DataPersona->getCelular(); ?>"  name="celu_user" required autocomplete="off"/>
                </div>
                <div class="field-wrap">
                    <label class="form-mod">
                        Contraseña<span class="req">*</span>
                    </label>

                    <input type="PASSWORD" name="pass_user" required autocomplete="off"/>
                </div>
    <input type="submit" value="Editar" name="ingresar" class="button button-block"/>

            </form>

        </div>

    </div><!-- tab-content -->
    </div>
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


